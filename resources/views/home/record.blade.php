<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>宁泽林-一花一世界</title>
    <link rel="stylesheet" type="text/css" href="/css/util.css"/>
    <link rel="stylesheet" type="text/css" href="/css/record.css"/>
    <link rel="stylesheet" type="text/css" href="/css/cssreset.css"/>
    <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_1070812_e23un57labj.css"/>
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
    <div class="bigtitle m-b-20 m-l-auto m-r-auto m-t-0 text-center fs-22">杭州加马行乐科技有限公司 / PHP 工程师、运维工程师 / 2019年2月 ~ 至今</div>
    <div class="lump m-l-auto m-r-auto card m-b-40">
        <p>待补充~~~</p>
    </div>
    <div class="bigtitle m-b-20 m-l-auto m-r-auto m-t-0 text-center fs-22">浙江禾匠信息科技有限公司 / 高级 PHP 工程师 / 2018年5月 ~ 2019年1月</div>
    <div class="lump m-l-auto m-r-auto card m-b-40">
        <p>公司业务方向为电商小程序，本人主要负责项目如下，面试时均可展示。</p>
        <h3 class="text-center m-t-20 m-b-20">禾匠小程序商城</h3>
        <p class="m-b-20">小程序商城系统，以源码方式出售并部署在客户服务器。支持「微信」、「支付宝」、「百度」三款小程序平台，其中「支付宝」、「百度」两款小程序的服务端 SDK、接入集成全部由我一人完成，且 SDK 已在领导支持下开源。</p>
        <p class="m-b-20">封装过程中，对 <span class="code">PSR</span>、<span class="code">Packagist</span>、<span class="code">Travis CI</span>、<span class="code">Coveralls</span>、<span class="code">StyleCI</span>、<span class="code">GuzzleHttp</span>、<span class="code">常见设计模式</span> 等有了更深刻的了解和实践。</p>
        <ul class="p-l-32 m-b-20">
            <li><a class="link">支付宝开放平台第三方 PHP SDK</a></li>
            <li><a class="link">百度小程序第三方 PHP SDK</a></li>
        </ul>
        <p class="m-b-20">另外在本项目中，我进行了大量的<span class="link">性能优化和局部重构</span>，对 Yii 框架进行了一些定制和调整：集成 dotenv、集成 Sentry（一款类似 Bugsnag 的异常追踪系统）、规范 API 响应、环境检测脚本等。</p>
        <h3 class="text-center m-t-20 m-b-20">榜店（被砍）</h3>
        <p class="m-b-20">此项目 2018 年 8 月底开始，到 10 月初夭折。最初公司的意图是想要推出一款全新的 SaaS 电商平台，以用户注册即用的方式提供服务，不再出售源码。</p>
        <p class="m-b-20">但由于研发的时间成本太高，公司前端力量欠缺，市场表现未知等原因，导致此项目在开发一个多月后突然开会宣布被砍。</p>
        <p class="m-b-20">由于是全新开始，没有历史包袱，且运行环境不受制于客户服务器，所以我采用了 <span class="code">PHP 7.2</span> + <span class="code">Laravel</span> + <span class="code">MySQL 5.7</span> 进行开发，完全遵循 PSR-1、PSR-2 以及未完成的 PSR-12。</p>
        <p class="m-b-20">虽然，此项目中途被砍十分遗憾，但整个后端从零到基本架构到各类服务到部署脚本到 HTTP API，都是我一手编写，进行了大量的前期工作，面试时可展示代码。</p>
        <p class="m-b-20">贴一张改过好多次的 E-R 图，就挂在自己工位旁边，便于开展头脑风暴。</p>
        <figure class="imgBox">
            <img src="https://oss.iacblog.com/img/5bbb73fe81804.jpg" alt="">
        </figure>
        <h3 class="text-center m-t-20 m-b-20">其它项目</h3>
        <p class="m-b-20">在前端兼容微信、支付宝、百度小程序的过程中，由于大量关键字不同、配置不同、文件后缀不同，我根据前端需求，利用 <span class="code">Symfony/Console</span> 编写了简易的<span class="link">转换脚本</span>，成功实现一套代码兼容三套平台，大大减轻前端工作量。</p>
        <p class="m-b-20">项目版本发布需要进行 Git Tag、对比区别（增量更新）、多次 ZIP 打包等复杂的操作，刚入职公司没多久感觉负责这块的同事每周更新占用太多时间，于是利用 <span class="code">Symfony/Process</span> 等编写了打包脚本。</p>
        <p class="m-b-20">由于公司产品是以源码方式出售，PHP 版本限制比较宽泛（5.4 以上），这导致很多第三方 Composer 包无法使用，所以自己造了很多简易、兼容低版本的轮子，部分开源代码如下：</p>
        <ul  class="p-l-32 m-b-20">
            <li><a class="link">中国地域库</a></li>
            <li><a class="link">第三方快递追踪</a></li>
            <li><a class="link">周报工具箱</a></li>
        </ul>
        <h3 class="text-center m-t-20 m-b-20">文档规范</h3>
        <p class="m-b-20">基于现有公共规范，制定数据库规范、代码规范、命名规范，编写 README 文档等，减轻新人入职后项目上手难度。</p>
    </div>
    <div class="bigtitle m-b-20 m-l-auto m-r-auto m-t-0 text-center fs-22">浙江椒图科技 / 技术管理岗 / 2017年2月 ~ 2018年5月</div>
    <div class="lump m-l-auto m-r-auto card m-b-20">
        <p class="m-b-20">公司主要业务方向为公安部门（浙江椒图物联网科技有限公司）以及电力部门（浙江椒图电力科技有限公司 / 嘉兴市鸿云电力设备有限公司）。</p>
        <p>以下列出部分任职期间负责或参与的项目，展示本人职能。</p>
    </div>
    <div class="cards m-b-20 m-l-auto m-r-auto m-t-0">
        <div class="card m-b-20">
            <h3 class="text-center m-b-20">桐乡（乌镇）智慧法治建设</h3>
            <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                <li>主要负责：项目经理 + 技术攻关</li>
                <li>技术关键词：Laravel / MySQL / AdminLTE / .NET / SuperSocket</li>
            </ul>
            <p class="title m-b-20">此项目工程量较大，包含多种软、硬件，主要工作为开发「桐乡案件管理系统」，并围绕此系统研发周边的「远程视频审讯」、「安卓自助机」、「智能锁/柜」、「超高频RFID案卷侦测」等。项目过程中，所有需求对接、规划开发周期、估算成本工作全部由我负责，在与公安领导、派出所民警一次又一次地会面、对接中，不断地锻炼自己的沟通和协调能力，我认为这是作为一名软件行业从业人员不可多得的优势。</p>
            <p class="title">另外，我在此项目中负责部分技术难点的攻关。举例，由于公司后端方向均为 PHP 技术人员，无 Socket 经验；而对接硬件设备需要通过 TCP 协议，处理字节级别的协议解析，且要确保常驻进程运行稳定，长期承载高并发，不允许存在内存泄露等隐性问题；另外考虑到公安网只能提供 Windows 服务器，所以 PHP 与硬件设备的「中间件」由我独立使用 .NET + SuperSocket 实现。主要利用 .NET 最新的异步特性（Task、Await）提高带机量，并使用队列对数据进行内部缓存，批量打包后提交至 HTTP API。目前在公安网未开启守护进程的情况下已稳定运行数星期，各性能指标稳定。</p>
        </div>
        <div class="card m-b-20">
            <h3 class="text-center m-b-20">检测实验室信息管理系统</h3>
            <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                <li>主要负责：技术选型 + 技术指导</li>
                <li>技术关键词：Laravel / MySQL</li>
            </ul>
            <p class="title">该项目主要面向电力部门的产品检测实验室，每年有数万样品送检是否合格，针对量大、难管的问题进行攻克。因送检样本品类不同，需进行不同的检测流程、出具格式完全不同的检测报告是主要难点。由于种类繁多，如果将流程、报告在开发过程中硬编码写进整套系统，后期维护难度将会非常巨大；于是前期评审阶段，我提出将表单、字段写成客户可自定义的方式，后端使用 NoSQL 数据库存储灵活多变的表单字段和数据等，MySQL 存储流程、用户、订单数据等与业务逻辑关联比较密切、需具备极高可靠性的数据；两套数据库结合互补，发挥各自优势。实际开发过程中我对 PHP 程序员提供多次技术指导，离职前该系统一期已开发完成，且运行良好。</p>
        </div>
        <div class="card m-b-20">
            <h3 class="text-center m-b-20">施工宝典</h3>
            <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                <li>主要负责：部署运维</li>
                <li>技术关键词：Docker</li>
            </ul>
            <p class="title">此项目为针对工程施工行业的 ERP 解决方案，分为网页端和 APP 端，支持私有部署。由于各家企业所需要的资源配额不同，故选择采用 Docker 进行分发和部署。这是我第一次对容器技术进行尝试，对于容器编排仍旧依靠 Docker Compose，未使用 Kubernetes。</p>
        </div>
        <div class="card m-b-20">
            <h3 class="text-center m-b-20">应急演练模拟系统</h3>
            <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                <li>主要负责：全栈开发</li>
                <li>技术关键词：.NET / WinForm / TCP</li>
            </ul>
            <p class="title">此项目为 C/S 架构，纯 Windows 平台，通信完全基于 TCP Socket 实现。基本功能类似在线考试系统，供市场安监部门模拟应急事件处置流程使用；考官（Server）控制演练流程，根据不同的情境，学生（Client）给出相应处置方案，同时，评审专家（Client）收到学生答案后进行评分与审阅，最终答案、分数、排名以及各类统计信息，统一展示到大屏幕（Server）供来访领导参观。</p>
        </div>
        <div class="card m-b-20">
            <h3 class="text-center m-b-20">电力插件管控平台</h3>
            <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                <li>主要负责：全栈开发</li>
                <li>技术关键词：ThinkPHP 5 / .NET / WinForm</li>
            </ul>
            <p class="title">该项目为公司自营项目，此前针对国家电网内部系统，公司推出多款智能化插件；随着时间推移，插件逐渐增多，出现了「升级困难」、「授权混乱」、「难以管理」等问题。认真了解实际情况后，我向公司提出「统一管控平台」的设想，并随后完成相应解决方案。</p>
            <p class="title">本项目采用 C/S 架构，全套由我设计编写，服务端基于 ThinkPHP 5 实现，客户端基于 .NET 实现。目前实现管理端新建编辑插件、新版上传、用户授权，用户端查看插件、提交反馈、自动更新，运行时检查授权、防止多开等功能；「安装」、「授权」、「更新」、「运行」、「反馈」一条龙，用户易使用、后台易管控，顺利解决以上问题。</p>
        </div>
        <div class="card m-b-20">
            <h3 class="text-center m-b-20">恒欣经营管理系统</h3>
            <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                <li>主要负责：C++ 开发</li>
                <li>技术关键词：CEF / JavaScript / WebKit</li>
            </ul>
            <p class="title">该项目采用 C/S 架构，我在此项目中负责客户端部分的设计与实现。使用 C++ 封装开源项目 CEF3 框架（Chromium Embedded Framework 3），并采用易语言（迎合客户要求）调用此库，实现程序内集成 Webkit 内核浏览器，并实现打印页面、JavaScript 交互、读写 Cookie、拦截请求、多进程渲染、枚举网页资源等功能。</p>
        </div>
    </div>
    <div class="bigtitle m-b-20 m-l-auto m-r-auto m-t-0 text-center fs-22">长沙异次元网络科技有限公司 / C++ 工程师 / 2015年5月 ~ 2016年12月</div>
    <div class="lump m-l-auto m-r-auto card m-b-20">
        <p class="">这是我的第一份工作，主要职责为围绕公司自创云端开发平台「<span class="link">百宝云</span>」进行二次开发，建立良好生态应用环境；参与 IDE 维护更新、API 性能测试与优化等简单的服务端工作。以下列出部分<span class="link">本人负责的项目</span>。</p>
    </div>
    <div class="cards m-b-20 m-l-auto m-r-auto m-t-0">
        <div class="card m-b-20">
            <h3 class="text-center m-b-20">百宝云SDK</h3>
            <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                <li>技术关键词：PHP / OpenSSL / Memory DLL Module</li>
            </ul>
            <p class="title">负责百宝云 SDK「PHP版本」、「易语言版本」的开发、封装和测试，PHP 版本实现多数通讯与加密算法，易语言版本实现全面向对象封装百宝云客户端组件功能。</p>
        </div>
        <div class="card m-b-20">
            <h3 class="text-center m-b-20">百宝云测试工具</h3>
            <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                <li>技术关键词：技术关键词：C++ / MFC</li>
            </ul>
            <p class="title">百宝云后端开发过程中，经常需要测试某模块功能，本工具即为方便测试用。初期使用易语言开发，由团队内部使用；后开放至用户，并使用 C++ 重写。由于采用老旧的 MFC 界面技术，期间涉及到多项界面技术难点均被克服，实现自定义 ComboBox、EditBox、MessageBox、ControlAnchor 等。</p>
        </div>
        <div class="card m-b-20">
            <h3 class="text-center m-b-20">文件实时同步更新系统</h3>
            <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                <li>技术关键词：C++ / MFC / WinAPI</li>
            </ul>
            <p class="title m-b-20">该项目是一套基于百宝云文件存储功能的「文件同步系统」，该项目主要应用线程池技术，调用 WinAPI 实时监测文件变动，并将文件 SHA1、创建时间、修改时间等参数与云端进行对比，将存在差异的文件添加至上传队列，并通知各接收端下载，达到各终端文件同步的目的。</p>
            <p class="title">另外，由本项目已分离出类似游戏更新的「多文件更新系统」，在编写过程中，发现 MFC 自带控件并不能满足需求；查阅 MSDN 文档后，对 TreeView、ListView 进行继承重绘，分别加入进度条、自动展开Item、自定义根目录等特性。</p>
        </div>
        <div class="card m-b-20">
            <h3 class="text-center m-b-20">百宝云网络验证系统</h3>
            <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                <li>技术关键词：MySQL / SQLite3 / 存储过程</li>
            </ul>
            <p class="title">该项目是专为国内低基础用户制作的「注册」、「登录」、「售卡」、「充值」、「更新」、「日志」一体化用户权限验证系统，后端使用百宝云 + MySQL / SQLite 的组合，客户端使用国产易语言（公司要求）编写。项目过程中最大难点在于，公司自主研发的后端脚本语言性能不足；于是我转换思路，利用存储过程与函数优化原生 SQL 语句，减少数据库查询占用的时间。本产品上线后立即成为百宝云应用中心销量第一。</p>
        </div>
        <div class="card m-b-20">
            <h3 class="text-center m-b-20">百宝云常用扩展包</h3>
            <p class="title m-b-20">封装常用函数、结构等，包括但不限于：</p>
            <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                <li>数据结构 : 栈 / 队列 / 哈希表 等</li>
                <li>简易ORM : SQL生成 / 参数化查询 等</li>
                <li>运算函数 : eval / div / trunc / hiword / loword / makelong 等</li>
                <li>数组函数 : min / max / avg / cmp / join / merge 等</li>
                <li>字符串函数 : sub / between / format / strset / regex 等</li>
                <li>文件函数 : enum / splitfname / splitpath 等</li>
                <li>线程池</li>
                <li>进制转换</li>
                <li>远程调试库</li>
                <li>HTTP客户端库</li>
            </ul>
        </div>
    </div>
    <div class="footer text-center p-t-35 p-b-35 fs-22 m-r-auto m-l-auto m-t-80">我感谢自己平凡，敢爱敢恨没负担；我感谢自己不凡，可爱可恨都包揽。</div>
    <div class="gotop" v-show="top" @click="goTop" id="to-top-btn"><i class="iconfont iconsend"></i></div>
    <div class="gohome"  @click="goHome"><i class="iconfont iconfanhui"></i></div>
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
			},
			goHome(){
				window.history.back(-1);
			}
		}
	});
</script>
<script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?d467c50a418036fc968b34049f344a7f";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
</script>
<script>
	document.oncontextmenu = function () { return false; };
	document.onkeydown = function () {
		if (window.event && window.event.keyCode === 123) {
			event.keyCode = 0;
			event.returnValue = false;
			return false;
		}
	};
	document.onkeydown = function(){
		if( event.ctrlKey ){
			return false;
		}
		if ( event.altKey ){
			return false;
		}
		if ( event.shiftKey ){
			return false;
		}
	};
	document.onselectstart = function(){
		event.returnValue = false;
	};
	// 或者直接返回整个事件
	document.onselectstart = function(){
		return false;
	}
</script>
</html>