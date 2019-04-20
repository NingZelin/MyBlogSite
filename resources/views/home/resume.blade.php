<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>宁泽林-一花一世界</title>
    <link rel="stylesheet" type="text/css" href="/css/util.css"/>
    <link rel="stylesheet" type="text/css" href="/css/resume.css"/>
    <link rel="stylesheet" type="text/css" href="/css/cssreset.css"/>
    <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_1070812_e23un57labj.css"/>
    @if ($data === true)
    <script src="https://cdn.bootcss.com/vue/2.6.10/vue.min.js"></script>
    @else
    <script src="https://cdn.bootcss.com/vue/2.6.10/vue.js"></script>
    @endif
    <link rel="shortcut icon" href="/favicon.ico"/>
    <!-- Fonts -->
</head>
<body>
<div id="app">
    <div class="top m-b-40">
        <div class="header text-center p-t-100 p-b-100 fs-44">@{{siteTitle}}</div>
        <div class="flex text-center p-t-18 p-b-18 fs-18" v-show="top">@{{siteTitle}}</div>
    </div>
    <div class="container">
        <div class="topinfo m-b-20 m-l-auto m-r-auto m-t-0">
            <p>世界在发展，尤其软件行业日新月异。我从未停止学习的脚步，请务必访问我的在线简历以获取最新信息。</p>
            <p>蔚蓝的天空虽然美丽，经常风云莫测的人却是起落无从。但他往往会成为风云人物，因为他经得起大风大浪的考验。</p>
        </div>
        <div class="cards m-b-20 m-l-auto m-r-auto m-t-0">
            <div class="card m-b-20">
                <h3 class="text-center m-b-20">概览</h3>
                <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                    <li>宁泽林 <span class="point">(NiZerin)</span>／男／1998-05</li>
                    <li>学习编程：<span class="point">2013年至今</span></li>
                    <li>项目经验：<span class="point">2015年至今</span></li>
                    <li>职场经验：<span class="point">2016年至今</span></li>
                    <li>期望岗位：暂无跳槽计划</li>
                    <li>真实性格：<a href="https://oss.iacblog.com/res/INTJ.pdf" target="_blank" class="link">INFJ</a></li>
                    <li>工作习惯：听电音写代码效率飞快（很嗨的那种）</li>
                </ul>
            </div>
            <div class="card m-b-20">
                <h3 class="text-center m-b-20">期望</h3>
                <p class="title">我希望我所处的团队是这样的：</p>
                <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                    <li>盈利状态。</li>
                    <li>热情，年轻，灵活。</li>
                    <li>鼓励创新，适当放权，结果导向。</li>
                    <li>领导务实，稳重。</li>
                    <li>脚踏实地，稳步前进。</li>
                </ul>
            </div>
            <div class="card m-b-20">
                <h3 class="text-center m-b-20">作品</h3>
                <blockquote class="m-b-20">Talk is cheap. Show me the code. - Linus Torvalds</blockquote>
                <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                    <li>GitHub：<a href="https://github.com/NiZerin" class="link">github.com/NiZerin</a></li>
                    <li>技术博客：<a href="http://nizer.in/" class="link">nizer.in</a></li>
                    <li>Laravel-China：<a href="https://learnku.com/users/32812" class="link">learnku.com/users/32812</a></li>
                </ul>
            </div>
            <div class="card m-b-20">
                <h3 class="text-center m-b-20">履历</h3>
                <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                    <li>点击查看：<a href="/record" class="link">www.zelblog.com/record</a></li>
                </ul>
                <h3 class="text-center m-b-20">联系</h3>
                <ul class="m-t-12 m-b-12 p-l-32 fs-14">
                    <li>Tel：<a class="link" >16621240880</a></li>
                    <li>Telegram：<a href="https://t.me/NiZerin" class="link" target="_blank">@NiZerin</a></li>
                    <li>E-Mail：<a href="mailto:nizerin98@gmail.com" class="link">nizerin98@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div class="bigtitle m-b-20 m-l-auto m-r-auto m-t-0 text-center fs-22">自我评价</div>
        <div class="lump m-l-auto m-r-auto card m-b-40">
            <p class="fs-16 m-b-20"><span class="point">基础扎实，学东西快，接触面广。</span> 十岁开始学习 Pascal 参加信息学奥赛，初中获得株洲市竞赛第一名；后自学 C 和 C++ 并从事 HTTP 协议抓包分析和 MFC 开发，大专毕业专注于编程。</p>
            <p class="fs-16 m-b-20"><span class="point">喜欢团队分工合作，善于沟通。</span> 曾担任技术领导，<span class="link">从零开始</span> 组建<span class="link">30 人</span> 技术团队，积累了一笔宝贵的研发协调经验。</p>
            <p class="fs-16 m-b-20"><span class="point">思维灵活，擅长独立解决问题。</span> 欢迎阅读本人技术博客 <a href="https://www.iacblog.com/tag/translations" class="link" target="_blank">WTF 分类</a>。日常折腾，以爱好为驱动研究过无人机、树莓派、黑群晖、加马语镜、音频设备、家用网络设备等。</p>
            <p class="fs-16 m-b-20"><span class="point">热爱技术，热爱钻研，规范与性能强迫症，做事追求极致优雅，享受写代码带来的成就感。</span></p>
            <p class="fs-16 m-b-20">熟悉与前端交互的原理（前端能得到什么、后端需要提供什么），相对了解前端的代码实现流程和最新的 <span class="point">ES6-10</span> 标准。对于关系型数据库，停留在少量数据实际应用层面，对深入调优无经验。</p>
            <p class="fs-16"><span class="point">后端、运维向</span> 是我的强项；正努力成为 <a href="https://baike.baidu.com/item/T%E5%9E%8B%E4%BA%BA%E6%89%8D" class="link" target="_blank">T型人才</a>。</p>
        </div>
        <div class="bigtitle m-b-20 m-l-auto m-r-auto m-t-0 text-center fs-22">技能优势</div>
        <div class="lump m-l-auto m-r-auto card m-b-40">
            <ul>
                <li>日常 <span class="code">macOS</span> + <span class="code">Zsh</span>，了解<span class="code">Ubuntu</span>、<span class="code">Debian</span>、<span class="code">DeePin</span>，相比 GUI 更喜欢 CLI。</li>
                <li>新时代运维，熟悉 <span class="code">AWS</span> 和 <span class="code">GCP</span>，了解 <span class="code">Terraform</span> / <span class="code">Ansible</span> / <span class="code">Prometheus</span>，正在学习 <span class="code">Kubernetes</span>。</li>
                <li>熟悉 <span class="code">Nginx</span> + <span class="code">PHP-FPM</span> 配置。</li>
                <li>PHP 狂热爱好者，熟练使用 <span class="code">Composer</span>、<span class="code">PECL</span>，熟悉 PHP 版本差异、PHPUnit 单元测试、OPCache 工作原理和调优、XDebug 性能分析等高级专题。</li>
                <li>具备 <span class="code">Laravel 5</span>、<span class="code">Yii 2</span>、<span class="code">Symfony</span>、<span class="code">Tp5</span> 框架的项目开发经验。</li>
                <li>熟练使用 <span class="code">Node.js</span>丶<span class="code">Vue.js</span>丶<span class="code">微信小程序</span> 等前端框架开发项目。</li>
                <li>熟练使用 <span class="code">swoole</span>丶<span class="code">workerman</span>异步请求框架，对这两款框架有着独特的见解，并有深究源码。</li>
                <li>熟练掌握 <span class="code">Redis</span>丶<span class="code">MongoDB</span>丶<span class="code">MySql</span>在 PHP 中的使用。</li>
                <li>开发规范方面，熟悉 <span class="code">PSR-N</span> 以及 <span class="code">PHP-CS</span>、<span class="code">PHP-CS-Fixer</span>、<span class="code">PHPStan</span> 等神器。</li>
                <li>关注应用安全，了解常见漏洞，熟悉 <span class="code">HTTP 1.1</span> 协议抓包分析。</li>
                <li>熟悉主流 <span class="code">CI/CD</span>、<span class="code">Coveralls</span>、<span class="code">Sentry</span>、<span class="code">Git Workflow</span>、正则语法等。</li>
            </ul>
        </div>
        <div class="bigtitle m-b-20 m-l-auto m-r-auto m-t-0 text-center fs-22">个人修养</div>
        <div class="lump m-l-auto m-r-auto card m-b-40">
            <ul>
                <li>优良的开发、测试、文档习惯，对自己一贯高标准要求。</li>
                <li>坚持写技术博客，总结项目过程中的经验教训，同时锻炼自己的表达能力。</li>
                <li>热爱科学上网，重度 <span class="code">Google</span> 用户，自用旁路网关全局墙外。</li>
                <li>社区活跃，每天必看 <span class="code">GitHub</span>、<span class="code">StackOverflow</span>、<span class="code">Laravel-China</span>。</li>
                <li>喜爱英语，至少不是短板，<a href="https://learnku.com/users/32812" target="_blank" class="link">Laravel-China 翻译审阅者</a>，欢迎阅读本人技术博客 <a href="https://www.iacblog.com/tag/translations" target="_blank" class="link"> Translations 分类</a> 。</li>
                <li>乐于贡献开源项目，经常活跃在各大社区论坛。花名：<span class="point">NiZerin</span></li>
            </ul>
        </div>
        <div class="topinfo m-b-20 m-l-auto m-r-auto m-t-0">
            <p>感谢您抽出宝贵时间阅读我的简历，期待有机会与您共事！</p>
        </div>
    </div>
    <div class="footer text-center p-t-35 p-b-35 fs-22 m-r-auto m-l-auto m-t-80">我感谢自己平凡，敢爱敢恨没负担；我感谢自己不凡，可爱可恨都包揽。</div>
    <div class="gotop" v-show="top" @click="goTop"><i class="iconfont iconsend"></i></div>
    <div class="gohome"  @click="goHome"><i class="iconfont iconfanhui"></i></div>
</div>
</body>
<script>
	const app = new Vue ({
		el: '#app',
		data: {
			siteTitle: 'NiZerin - 个人简历',
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
</html>