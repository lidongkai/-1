var vCodeLoginUrl = 'https://login.flyme.cn/sso/vcodelogin';
var vCodeLoginUnionUrl = 'https://login.flyme.cn/sso/vcodeUnionlogin';
var getKeyUrl = 'https://login.flyme.cn/uc/system/vcode/sendNoPasswordLogin';
var validPhoneUrl = 'https://login.flyme.cn/sso/isValidLoginPhone';
var accountLoginUrl = 'https://login.flyme.cn/sso/login';
var qrLoginUrl = "https://login.flyme.cn/mzQrLogin?qrType=0";
var accountLogin = 'https://login.flyme.cn/login/login.html';
var registerUrl = 'https://i.flyme.cn/register'
var mregisterUrl = 'https://i.flyme.cn/mregister.html'
var vCodeTypeValue = '21';
var showKapkeyCode = 403001; //超过出错次数
var showErrorKakeyCode = 403002; //验证码错误
var showAccountErrorCode = 403003; //账号错误
var showPasswordErrorCode = 403006; //密码错误
var showLoginBusyCode = 500; //系统繁忙
var showAbnormalCode = 403007; //异常登录

if (/in\.meizu\.com/.test(location.hostname)) {
    vCodeLoginUrl = vCodeLoginUrl.replace(/\.flyme\.cn/, '.in.meizu.com');
    vCodeLoginUnionUrl = vCodeLoginUnionUrl.replace(/\.flyme\.cn/, '.in.meizu.com');
    getKeyUrl = getKeyUrl.replace(/\.flyme\.cn/, '.in.meizu.com');
    validPhoneUrl = validPhoneUrl.replace(/\.flyme\.cn/, '.in.meizu.com');
    accountLoginUrl = accountLoginUrl.replace(/\.flyme\.cn/, '.in.meizu.com');
    accountLogin = accountLogin.replace(/\.flyme\.cn/, '.in.meizu.com');
    registerUrl = registerUrl.replace(/\.flyme\.cn/, '.in.meizu.com');
    mregisterUrl = mregisterUrl.replace(/\.flyme\.cn/, '.in.meizu.com');
}

var clickSubmit = 0;

$(function() {
    $('#acceptFlyme').mzCheckBox({
        click: function(e, event) {
            var error = $('#acceptError');
            var $field = $('#rememberField');
            if (!$(e).prop('checked')) {
                error.show();
                $field.css('margin-bottom', 10);
            } else {
                error.hide();
                $field.css('margin-bottom', 30);
            }
        }
    });
    var form = new Form();
    form.init();
    global.isNotMiddleForm = true;
    if ('CountryCode' in window) window['CountryCode'].init()

    // $("#mainForm").click(function() {
    //     if (clickSubmit != 0) {
    //         clickSubmit = 0;
    //         return;
    //     }
    //     util.removeTipsShowMsg("tips-show");
    // });

});
var Form = function() {
    this.$form = $("#mainForm");
    this.$btn = $('#register');
    this.$getKey = $('#getKey');
    this.$phone = $('#phone');
    this.$imgKey = $('#kapkey');
};
$.extend(Form.prototype, {
    init: function() {
        this.initParameter();
        this.initValidate();
        this.initFormEvent();
        this.initQRPanel();
        util.initPlaceholder($('#kapkey'), '验证码');
        // this.initResize();
        // $.floatTip({'data': [
        //     {'id': 'phone', 'text': '输入手机号码', 'width': 200, 'loc': 1, 'diffy': 2, 'diff': 10},
        //     {'id': 'kapkey', 'text': '请输入手机收到的验证码', 'width': 200, 'loc': 1, 'diffy': 2, 'diff': 10}
        // ]});
        util.disableVcode(this.$getKey);
        if ($.browser.msie && $.browser.version == '6.0') {
            this.$pwd.focus();
            this.$pwd.blur();
        }

        //绑定按钮切换事件
        $('#toAccountLogin').click(function() {
            var url = accountLogin + location.search;
            location.href = url;
        });

    },
    initParameter: function() {
        var appuri = util.getParameter("appuri");
        var useruri = util.getParameter("useruri");
        var service = util.getParameter("service");
        var sid = util.getParameter("sid");
        var urlSubfix = "";
        if (appuri != null) {
            $('#appuri').val(appuri);
            urlSubfix = urlSubfix + "appuri=" + encodeURIComponent(appuri) + "&";
        }
        if (useruri != null) {
            $('#useruri').val(useruri);
            urlSubfix = urlSubfix + "useruri=" + encodeURIComponent(useruri) + "&";
        }
        if (service != null) {
            $('#service').val(service);
            urlSubfix = urlSubfix + "service=" + encodeURIComponent(service) + "&";
        }
        if (sid != null) {
            $('#sid').val(sid);
            urlSubfix = urlSubfix + "sid=" + encodeURIComponent(sid);
        }
        var oldLoginHerf = $("#toLogin").attr("href");
        var oldRegisterHerf = $("#toRegister").attr("href");
        var nameRegisterHref = "/nameRegister";
        var aLoginHref = $("#a_login").attr("href");
        if (urlSubfix != "") {
            urlSubfix = "?" + urlSubfix;
            $("#toLogin").attr("href", oldLoginHerf + urlSubfix);
            $("#toRegister").attr("href", oldRegisterHerf + urlSubfix);
            $("#toNameRegister").attr("href", nameRegisterHref + urlSubfix);
            $("#a_login").attr("href", aLoginHref + urlSubfix);

            //注册地址
            registerUrl = registerUrl + urlSubfix;
            mregisterUrl = mregisterUrl + urlSubfix;
        }
    },
    initInput: function($input, info) {
        util.initPlaceholder($input, info, 'emptyInput');
    },
    initResize: function() {
        global.resizer.setProperty('minH', 800);
        $(document.body).css('min-height', 800);
    },
    initFormEvent: function() {
        var _this = this;
        this.$btn.click(function() {
            _this.$form.submit();
        });
        this.$form.bind("keypress", function(e) {
            if (e.keyCode == 13) {
                _this.$btn.click();
            }
        });

        this.$getKey.bind('click', function() {
            var interval = null;
            $o = _this.$getKey;
            if ($.data($o[0], 'going') || !$.data($o[0], 'isPhoneOk')) {
                return;
            }
            var _beginCount = function(count) {
                $o.addClass('invalidBtn');
                $o.text(count + '秒后重新获取');
                interval = setInterval(function() {
                    count--;
                    $o.text(count + '秒后重新获取');
                    if (count <= 0) {
                        clearInterval(interval);
                        $o.text('获取验证码');
                        $.data($o[0], 'going', false);
                        if ($.data($o[0], 'isPhoneOk')) {
                            $o.removeClass('invalidBtn');
                        }
                    }
                }, 1000);
            };

            function _dealCount() {
                $.data($o[0], 'going', true);
                _beginCount(60);
            }
            var param = {};
            param.phone = '00' + ($('#cycode').val() - 0) + ':' + _this.$phone.val();
            param.vCodeTypeValue = vCodeTypeValue;
            util.doAsyncPost(getKeyUrl, function(result) {
                result = util.getData(result, false, function(mes, code, callback) {
                    //                    callback();
                    _this.showErrorTips(code, mes)
                });
                if (result == true) {
                    _dealCount();
                }
            }, param);
        });

        util.addBtnFocusClass();
        util.removeTipEvent();
        // util.initVcode(this.$getKey, getKeyUrl, 60, function () {},function(after, dealCount){
        //     //清空验证码
        //     $('#kapkey').val('');
        //     nAlert('<p>请输入图中文字</p><p class="normalInput"><input type="text" value="" name="kapmap" id="kapmap" class="kapkey" maxlength="6" autocomplete="off"><img id="imgKey" class="pointer" title="点击可刷新验证码" src="/kaptcha.jpg?t=1411024557506"></p>',"提示",function(){
        //         var param = {};
        //         param.kapkey = $('#kapmap').val();
        //         param.phone = '00' + ($('#cycode').val() - 0) + ':' + _this.$phone.val();
        //         param.vCodeTypeValue = vCodeTypeValue;
        //         util.doAsyncPost(getKeyUrl, function(result) {
        //             result = util.getData(result, false, function(mes, code, callback){
        //                 callback();
        //             });
        //             if(result == true){
        //                 dealCount();
        //             }
        //         }, param);
        //     });
        //     $("#kapmap").focus();
        //     function refreshImg(){
        //         $("#imgKey")[0].src = "/kaptcha.jpg?t="+new Date().getTime();
        //         return false;
        //     }
        //     $("#imgKey").click(refreshImg);
        //     refreshImg();
        //     $(".alertDialogMain").css("border","none");
        // });
    },
    initQRPanel: function() {
        var $form = $('#mainForm')
        var $btn = $('#qr-btn')
        var $panel = $('#qr-panel')
        var qrUrl = 'https://login.flyme.cn/mzQrShow?qrType=0&_t='
        var confirmTimer = null
        var listenScan = function() {
            if (confirmTimer) clearInterval(confirmTimer)

            confirmTimer = setInterval(function() {
                util.doAsyncGet(qrLoginUrl, function(data) {
                    var r = util.getData(data)

                    if (r.confirmed) {
                        clearInterval(confirmTimer)
                            //if (r.loginurl && $.trim(r.loginurl) != '') location.href = r.loginurl
                            //reload current page to login
                        location.reload();
                        return
                    }

                    if (r.authenticated) {
                        $panel.find('.tips').addClass('hide')
                        $panel.find('.qr-success-tips').removeClass('hide')
                            /*$panel.find('.tips').fadeOut(300, function(e) {
                             $panel.find('qr-success-tips').fadeIn(300)
                             })*/
                        return
                    }

                    if (r.timeout) {
                        loadQRImg()
                            /*$panel.find('qr-success-tips').fadeOut(300, function(e) {
                             $panel.find('.tips').fadeIn(300)
                             })*/
                        $panel.find('.tips').removeClass('hide')
                        $panel.find('.qr-success-tips').addClass('hide')
                    }
                })
            }, 3000)
        }
        var loadQRImg = function() {
            $panel.find('img').attr('src', qrUrl + new Date().getTime())
        }

        if (/in\.meizu\.com/.test(location.hostname)) qrUrl = qrUrl.replace(/\.flyme\.cn/, '.in.meizu.com')

        $btn.on('click', function(e) {
            // 动态设置扫码框高度 60是扫码框距离顶部的距离
            var $h1 = $form[0].offsetHeight - 60
            var $h2 = $panel.height()

            $panel.css('height', Math.max($h1 - 10, $h2))

            if ($btn.hasClass('pc-btn')) {
                $btn.removeClass('pc-btn')
                $panel.addClass('hide')
                clearInterval(confirmTimer)
            } else {
                $btn.addClass('pc-btn')
                $panel.removeClass('hide')
                loadQRImg()
                listenScan()
            }
        })
    },
    showErrorTips: function(code, mes) {
        if (code == showPasswordErrorCode || code == showErrorKakeyCode) {
            //util.addTipsShowMsg("kapkey", mes);
            util.showTip(mes);
            return true;
        }
        //        if (code == showLoginBusyCode){
        //            nAlert(mes);
        //            return true;
        //        }
        if (code != 200 && mes != "") {
            //util.addTipsShowMsg("tips-show", mes);
            util.showTip(mes);
            return true;
        }
        return false;
    },
    initValidate: function() {
        var _this = this;
        this.$form.validate($.extend(util.validate, {
            submitHandler: function() {
                //是否接受协议判断
                // if (!$('#acceptFlyme').prop('checked')) {
                //     return;
                // }
                // 极速验证
                // if(!GT_status){
                //    $('#j_geetest_error').html(GT_Tips).show();
                //    return;
                // }
                var data = CountryCode.getFormData(_this.$form);

                data['phone'] = '00' + ($('#cycode').val() - 0) + ':' + data['phone'];
                data['vCodeTypeValue'] = vCodeTypeValue;
                data['vcode'] = $('#kapkey').val();
                data['useruri'] = $('#useruri').val();
                data['appuri'] = $('#appuri').val();
                data['sid'] = $('#sid').val();
                data['service'] = $('#service').val();
                var sid = $('#sid').val();

                var loginUrl = vCodeLoginUrl;
                if (sid == "unionlogin") {
                    loginUrl = vCodeLoginUnionUrl;
                }

                $.ajax({
                    type: "post",
                    url: loginUrl,
                    data: data,
                    dataType: "json",
                    success: function(result) {
                        var data = util.getData(result, false, function(mes, code) {
                            window.gt_captcha_obj && gt_captcha_obj.refresh();
                            //去除异常
                            // if (code == showAbnormalCode) {
                            //     _this.showAbnormalInp(mes);
                            //     return;
                            // }
                            if (code != '200' && _this.$imgKey.is(':visible')) {
                                _this.$imgKey.click();
                            }
                            //                          if(code==200000||code==200001||code==200002||code==200003||code==403008){
                            //                              nAlert(mes,'提示');
                            //                              return;
                            //                          }
                            // if (_this.showKakey(code, mes)) {
                            //     return;
                            // }
                            if (_this.showErrorTips(code, mes)) {
                                return;
                            }
                        });
                        if (data == null) {
                            if (result.code == showKapkeyCode || result.code == showPasswordErrorCode) {
                                _this.$pwd.val('');
                            }
                            //bind event
                            _this.$btn.css({
                                'background-color': '#32a5e7'
                            }).removeClass('unsubmit');
                            return;
                        };
                        location.href = data;
                    },
                    error: function(result) {
                        //bind event
                        _this.$btn.css({
                            'background-color': '#32a5e7'
                        }).removeClass('unsubmit');
                        try {
                            var txt = result.responseText && eval('(' + result.responseText + ')');
                            if (txt.code == "403") {
                                //                          nAlert(txt.message||'网络错误', "提示");
                                _this.showErrorTips(txt.code, txt.message || '网络错误', "提示", mes)
                            } else {
                                //                          nAlert('网络错误', "提示");
                                _this.showErrorTips(txt.code, '网络错误', "提示", mes)
                            }
                        } catch (err) {
                            //                        nAlert('网络错误', "提示");
                            _this.showErrorTips(txt.code, '网络错误', "提示", mes)
                        }
                    }
                });
            },
            showErrors: function(errorMap, errorList) {
                var defShowErr = this.defaultShowErrors
                var phoneMsg = errorMap['phone']
                var $cycodeBox = $('#cycode-box')
                var kapkeyMsg = errorMap['kapkey']

                if (phoneMsg == "请输入手机号码") {
                    _this.showErrorTips("500", "请填写完整的登录信息");
                    delete errorMap['phone']
                    clickSubmit = 1;
                    return false;
                } else if (kapkeyMsg == "请填写验证码") {
                    _this.showErrorTips("500", "请填写完整的登录信息");
                    delete errorMap['kapkey']
                    clickSubmit = 1;
                    return false;
                } else if (phoneMsg) {
                    _this.showErrorTips("500", phoneMsg);
                    delete errorMap['phone']
                    clickSubmit = 1;
                    return false;
                }else if(kapkeyMsg){
                    _this.showErrorTips("500", kapkeyMsg);
                    delete errorMap['kapkey']
                    clickSubmit = 1;
                    return false;
                }

                //$cycodeBox.removeClass('error')
                if (phoneMsg) {
                    //$cycodeBox.addClass('error')
                    //if (!$('#err-tips-phone').length)
                        //$('<span id="err-tips-phone" for="phone" class="error">' + phoneMsg + '</span>').insertAfter($cycodeBox)
                    util.showTip(phoneMsg);
                    delete errorMap['phone']
                }
                defShowErr.call(this, errorMap, errorList)
            },
            rules: util.createRule({
                phone: {
                    zdiyRemote: validPhoneUrl,
                    ppDigits11: false,
                    pRequired: true
                },
                password: null,
                kapkey: null
            }),
            messages: util.createMes({
                phone: {
                    zdiyRemote: function() {
                        var u = 'https://login.flyme.cn/sso';
                        var u2 = 'https://i.flyme.cn/uc/webjsp/member/detail&sid=unionlogin&service=ucweb&autodirct=true';
                        if (/in\.meizu\.com/.test(location.hostname)) {
                            u = u.replace(/\.flyme\.cn/, '.in.meizu.com');
                            u2 = u2.replace(/\.flyme\.cn/, '.in.meizu.com');
                        }
                        var regUrl = registerUrl;
                        if (navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)) {
                            regUrl = mregisterUrl;
                        }
                        return '该手机号码尚未注册，<a class="linkABlue" href=' + regUrl + '>立即注册</a>'
                    }
                },
                password: null,
                kapkey: null
            }),
            hideError: function() {},
            validClass: "aaa"
        }));
    }
});