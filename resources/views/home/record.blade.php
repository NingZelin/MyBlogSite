<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>宁泽林-一花一世界</title>
    <link rel="stylesheet" type="text/css" href="/css/util.css"/>
    <link rel="stylesheet" type="text/css" href="/css/record.css"/>
    <link rel="stylesheet" type="text/css" href="/css/cssreset.css"/>
    @if ($data === true)
        <script src="https://cdn.bootcss.com/vue/2.6.10/vue.min.js"></script>
    @else
        <script src="https://cdn.bootcss.com/vue/2.6.10/vue.js"></script>
    @endif
    <link rel="shortcut icon" href="/favicon.ico" />
    <!-- Fonts -->
</head>
<body>
<div id="app">
    <div class="top m-b-40">
        <div class="header text-center p-t-100 p-b-100 fs-44">@{{siteTitle}}</div>
        <div class="flex text-center p-t-18 p-b-18 fs-18" v-show="top">@{{siteTitle}}</div>
    </div>
    <div class="bigtitle m-b-20 m-l-auto m-r-auto m-t-0 text-center fs-22">杭州加马行乐 / PHP 工程师、运维工程师 / 2019年2月 ~ 至今</div>
    <div class="lump m-l-auto m-r-auto card m-b-40">
        <p>待补充~~~</p>
    </div>
    <div class="bigtitle m-b-20 m-l-auto m-r-auto m-t-0 text-center fs-22">浙江禾匠信息科技有限公司 / 高级 PHP 工程师 / 2018年5月 ~ 2019年1月</div>
    <div class="lump m-l-auto m-r-auto card m-b-40">
        <p>公司业务方向为电商小程序，本人主要负责项目如下，面试时均可展示。</p>
        <h3 class="text-center m-t-20 m-b-20">禾匠小程序商城</h3>
        <p class="m-b-20">小程序商城系统，以源码方式出售并部署在客户服务器。支持「微信」、「支付宝」、「百度」三款小程序平台，其中「支付宝」、「百度」两款小程序的服务端 SDK、接入集成全部由我一人完成，且 SDK 已在领导支持下开源。</p>
        <p class="m-b-20">封装过程中，对 PSR、Packagist、Travis CI、Coveralls、StyleCI、GuzzleHttp、常见设计模式 等有了更深刻的了解和实践。</p>
    </div>
    <div class="footer text-center p-t-35 p-b-35 fs-22 m-r-auto m-l-auto m-t-80">我感谢自己平凡，敢爱敢恨没负担；我感谢自己不凡，可爱可恨都包揽。</div>
    <div class="gotop" v-show="top" @click="goTop" id="to-top-btn"><i class="iconfont iconsend"></i></div>
</div>
</body>
<script>
	const app = new Vue ({
		el: '#app',
		data: {
			siteTitle: 'NiZerin - 个人履历',
			top: false,
			scrollTop: null
		},
		mounted () {
			window.addEventListener ('scroll', this.handleScroll)
		},
		destroyed () {
			window.removeEventListener ('scroll', this.handleScroll)
		},
		methods: {
			handleScroll () {
				const scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
				console.log (scrollTop);
				this.top = scrollTop >= 200;
			},
			goTop () {
				let that = this;
				let timer = setTimeout (() => {
					let ispeed = Math.floor (- that.scrollTop / 5);
					document.documentElement.scrollTop = document.body.scrollTop = that.scrollTop + ispeed;
					if ( that.scrollTop === 0 ) {
						clearTimeout (timer)
					}
				}, 16)
			}
		}
	});
</script>
</html>