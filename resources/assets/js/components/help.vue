<template>
    <Col span="18">
    <Collapse v-model="valuemain" accordion>
        <Panel name="basic">
            基本
            <div slot="content">
                <Collapse accordion v-model="valuebasic">
                    <Panel name="basic-1">
                        SHUPT？
                        <p slot="content">目前只是一个简单的资源交流平台。立志于使就算不懂得计算机专业知识和原理的人也能不被各超大互联网公司的捆绑下载软件坑害。</p>
                        <p slot="content">网站并不提供资源，资源都在各上传的电脑中。下载后即可在他人下载是参与上传，为网站作出一份贡献。</p>
                        <p slot="content">PT提倡人人为我，我为人人的互助精神。不同于私人PT，SHUPT应该会坚持非盈利原则.</p>
                        <p slot="content">进一步了解PT原理，<a
                                href="https://baike.baidu.com/item/pt下载/6883416?fr=aladdin">传送门</a>。
                        </p>
                    </Panel>
                    <Panel name="basic-2">
                        如何下载
                        <p slot="content">1·安装用于下载的软件</p>
                        <p slot="content"> windows和MacOS用户请下载<a href="http://www.utorrent.com/intl/zh/">μTorrent</a>
                        </p>
                        <p slot="content"> Linux用户应该可以自己解决这个问题。</p>
                        <p slot="content">2·下载torrent文件</p>
                        <p slot="content">3·用下载的软件打开torrent，开始下载</p>
                    </Panel>
                    <Panel name="basic-3">
                        如何上传
                        <p slot="content">前话</p>
                        <p slot="content">  来而不往非礼也。大家都是成年人咯。————Python</p>
                        <p slot="content">  分享率过低将失去下载权。</p>
                        <p slot="content">0.生成</p>
                        <p slot="content">  </p>
                        <p slot="content">1·发布</p>
                        <p slot="content">  填好相关信息点击确认就可以。</p>
                        <p slot="content">2·保种</p>
                        <p slot="content">  上传完成后，链接这规定网络保持上传就可以咯!</p>
                    </Panel>
                    <Panel name="basic-4">
                        流量？
                        <p slot="content">目前SHUPT只对上大校内开放，只要使用校内的网络就能以极快的速度下载咯！使用寝室自己办的宽带会又慢又占用室友带宽的。</p>
                    </Panel>
                </Collapse>
            </div>
        </Panel>
        <Panel name="user">
            用户信息
            <div slot="content">
                <Collapse accordion v-model="valueuser">
                    <Panel name="user-1">
                        分享率？
                        <p slot="content">上传量于下载量的比值</p>
                        <p slot="content"> 如果下载量大于50GB，应该要有大于0.5的分享率，过低会被封禁</p>
                        <p slot="content"> 如果下载量大于500GB,应该要有大于0.7的分享率，过低会被封禁</p>
                        <p slot="content"> 如果下载量大于1T，应该要有大于0.8的分享率，过低会被封禁</p>
                    </Panel>
                    <Panel name="user-2" id="join">
                        加入我们？
                        <p slot="content">
                            <Icon type="social-github"></Icon>
                            <a href="https://github.com/gtmdcm/SHUPT">GITHUB</a></p>
                        <p slot="content">
                            <Icon type="email"></Icon>
                            1104127978@qq.com
                        </p>
                    </Panel>
                </Collapse>
            </div>
        </Panel>
        <Panel name="data">
            数据
            <div slot="content">
                <Collapse accordion v-model="valuedata">
                    <Panel name="data-1">
                        未更新？
                        <p slot="content">
                            µtorrent等客服端不是实时更新的！
                        </p>
                        <p slot="content">
                            服务器被玩坏啦～会有补偿的。
                        </p>
                        <p slot="content">
                            你没有正确关闭客户端或者有<a href="https://github.com/gtmdcm/SHUPT/issues">其他问题</a>
                        </p>
                    </Panel>
                    <Panel name="data-2">
                        ALL Free？
                        <p slot="content">
                            <img src="/images/allfree.gif" alt="">
                        </p>
                    </Panel>
                </Collapse>
            </div>
        </Panel>
        <Panel name="upload">
            上传
            <div slot="content">
                <Collapse accordion v-model="valueupload">
                    <Panel name="upload-1">
                        我可以发布些什么？
                        <p slot="content">
                            非（政治敏感、色情、宗教）的影视软件,如有发现，会被封禁的！
                        </p>
                    </Panel>
                </Collapse>
            </div>
        </Panel>
        <Panel name="download">
            下载
            <div slot="content">
                <Collapse accordion v-model="valuedownload">
                    <Panel name="download-1">
                        推荐的软件
                        <p slot="content">
                            <a href="http://www.utorrent.com"><img src="images/µtorrent.png" alt=""></a>
                        </p>
                    </Panel>
                    <Panel name="download-2">
                        我可以使用迅雷吗？
                        <p slot="content">
                            不可以，使用任何网盘或是迅雷等会造成passkey破坏的都会被封禁
                        </p>
                    </Panel>
                    <Panel name="download-3">
                        种子不见啦！
                        <p slot="content">可能是含有非法信息被删掉了。</p>
                    </Panel>

                </Collapse>
            </div>
        </Panel>
        <Panel name="more">
            如果找不到答案
            <p slot="content">
                <Icon type="social-github"></Icon>
                <a href="https://github.com/gtmdcm/SHUPT">GITHUB</a></p>
            <p slot="content">
                <Icon type="email"></Icon>
                1104127978@qq.com
            </p>
        </Panel>
    </Collapse>
    </Col>
</template>

<script>
    export default {
        name: "help",
        data: function () {
            return {
                valuemain: 'basic',
                valuebasic: 'basic-1',
                valueuser: 'user-1',
                valuedata: 'data-1',
                valuedownload: 'download-1',
                valueupload: 'upload-1',
            }
        },
        mounted: function () {
            console.log(window.location);
            if (window.location.href.indexOf('join=1') !== -1) {
                this.valuemain = "user";
                this.valueuser = "user-2";
            }
            if (window.location.href.indexOf('join=2') !== -1) {
                this.valuemain = "basic";
                this.valuebasic = "basic-1";
            }

            if (window.location.href.indexOf('join=3') !== -1) {
                this.valuemain = "download";
                this.valuedownload = "download-1";
            }
            if (window.location.href.indexOf('join=4') !== -1) {
                this.valuemain = "user";
                this.valueuser = "user-1";
            }
        }
    }
</script>

<style scoped>

</style>