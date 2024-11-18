<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
    // 首页模板
    $IndexStyle = new Typecho_Widget_Helper_Form_Element_Select(
        'IndexStyle',
            array(
                'IndexList' => '列表',
                'IndexPanel' => '面板',
            ),  // 添加选项数组
            'IndexList',
            _t('<h3>页面设置</h3>首页模板'),
            _t('请选择首页文章列表的显示方式，默认为列表，面板模式适用于文档站。')
        );
        $form->addInput($IndexStyle);
    // 首页缩略图
    $IndexStyleThumbnail = new Typecho_Widget_Helper_Form_Element_Radio(
        'IndexStyleThumbnail',
            array(
                'open' => '打开',
                'close' => '关闭',
            ),
            'close',
            _t('首页缩略图'),
            _t('是否在文章列表中显示缩略图，注：面板模式不生效。')
        );
        $form->addInput($IndexStyleThumbnail);
    // 侧边显示设置
    $SidebarDisplay = new Typecho_Widget_Helper_Form_Element_Radio(
        'SidebarDisplay',
            array(
                'Auther' => '作者',
                'Logo' => 'Logo',
            ),
            'Auther',
            _t('Auther&Logo'),
            _t('侧边顶部显示为作者介绍或Logo设置。')
        );
        $form->addInput($SidebarDisplay);
    // 侧边顶部Logo
    $SidebarLogo = new Typecho_Widget_Helper_Form_Element_Text(
        'SidebarLogo',
        NULL,
        '' . THEME_URL . '/Assets/images/logo.png',
        _t('Logo地址'),
        _t('请填入Logo地址，没有则显示网站标题。')
    );
    $form->addInput($SidebarLogo);
    // 侧边顶部作者设置
    $SidebarAuther = new Typecho_Widget_Helper_Form_Element_Text(
        'SidebarAuther',
        NULL,
        '' . Get::Options('title') . '',
        _t('作者名称'),
        _t('请填入作者名称，没有则显示网站标题。')
    );
    $form->addInput($SidebarAuther);
    $SidebarAutherAvatar = new Typecho_Widget_Helper_Form_Element_Text(
        'SidebarAutherAvatar',
        NULL,
        '' . THEME_URL . '/Assets/images/avatar.jpg',
        _t('作者头像'),
        _t('请填入作者名称，没有则显示网站Favicon。')
    );
    $form->addInput($SidebarAutherAvatar);
    $SidebarAutherInfo = new Typecho_Widget_Helper_Form_Element_Textarea(
        'SidebarAutherInfo',
        NULL,
        '' . Get::Options('description') . '',
        _t('作者简介'),
        _t('请填入作者简介，没有则显示网站介绍。')
    );
    $form->addInput($SidebarAutherInfo);

    // 侧边导航分类
    $SidebarNavCategory = new Typecho_Widget_Helper_Form_Element_Radio(
        'SidebarNavCategory',
            array(
                'open' => '展开',
                'close' => '折叠',
            ),
            'open',
            _t('侧边分类'),
            _t('是否在侧边导航中默认展开显示分类列表')
        );
        $form->addInput($SidebarNavCategory);
    // 侧边归档页面
    $SidebarNvaTime = new Typecho_Widget_Helper_Form_Element_Radio(
        'SidebarNvaTime',
            array(
                'open' => '展开',
                'close' => '折叠',
            ),
            'close',
            _t('侧边页面'),
            _t('是否在侧边导航中默认展开显示页面列表')
        );
        $form->addInput($SidebarNvaTime);
    // 侧边翻译
    $SidebarTranslate = new Typecho_Widget_Helper_Form_Element_Radio(
        'SidebarTranslate',
            array(
                'open' => '展开',
                'close' => '折叠',
            ),
            'close',
            _t('侧边翻译'),
            _t('是否在侧边导航中默认展开显示翻译列表')
        );
        $form->addInput($SidebarTranslate);
    // 侧边自定义
    $SidebarCustom = new Typecho_Widget_Helper_Form_Element_Textarea(
        'SidebarCustom',
            NULL,
            '<a href="' . Get::Options("feedUrl") . '">
                <li class="mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons">rss_feed</i>
                    <div class="mdui-list-item-content">订阅</div>
                </li>
            </a>',
            _t('侧边自定义'),
            _t('请填入侧边自定义内容，留空不显示。推荐使用MDUI列表组件 <a href="https://www.mdui.org/docs/list" target="_blank">查看文档</a>')
        );
        $form->addInput($SidebarCustom);

    // 底部自定义链接
    $BottomLink = new Typecho_Widget_Helper_Form_Element_Textarea(
    'BottomLink',
        NULL,
        '哔哩哔哩<a href="https://space.bilibili.com/435502585" target="_blank">@Tomori</a>',
        _t('底部自定义链接'),
        _t('请填入底部自定义链接，留空不显示。<hr>')
    );
    $form->addInput($BottomLink);
