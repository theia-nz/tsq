<?php
    /*
    |--------------------------------------------------------------------------
    | 5 Steps to Contribute a New Twill Localization at Ease
    |--------------------------------------------------------------------------
    | 1. Find the "lang.csv" under "lang" directory.
    | 2. Import the csv file into a blank Google Sheet.
    | 3. Each column is a language, enter the translation for a column. (tips: feel free to freeze rows and columns).
    | 4. Download the Google Sheet as CSV, replace the original "lang/lang.csv" with the new one.
    | 5. Run the command "php artisan twill:lang" to sync all lang files.
    */


return [
    'auth' => [
        'back-to-login' => '返回登陆界面',
        'choose-password' => '选择密码',
        'email' => '邮箱',
        'forgot-password' => '忘记密码',
        'login' => '登陆',
        'login-title' => '登陆',
        'oauth-link-title' => '重新输入密码将 :provider 连接到你的账户',
        'otp' => '一次性密码',
        'password' => '密码',
        'password-confirmation' => '确认密码',
        'reset-password' => '重置密码',
        'reset-send' => '发送重置邮件',
        'verify-login' => '登陆验证',
    ],
    'buckets' => [
        'intro' => '今天想要展示什么？',
        'none-available' => '无可用内容',
        'none-featured' => '无展示内容',
        'publish' => '发布',
        'source-title' => '可用内容',
    ],
    'dashboard' => [
        'all-activity' => '全部动态',
        'create-new' => '创建新的',
        'empty-message' => '没有新动态',
        'my-activity' => '我的动态',
        'my-drafts' => '我的草稿',
        'search-placeholder' => '搜索',
        'statitics' => '统计',
    ],
    'dialog' => [
        'cancel' => '取消',
        'ok' => '好的',
        'title' => '移至回收站',
    ],
    'editor' => [
        'cancel' => '取消',
        'delete' => '删除',
        'done' => '完成',
        'title' => '内容编辑器',
    ],
    'emails' => [
        'all-rights-reserved' => '保留一切权利',
        'hello' => '你好！',
        'problems' => '如果无法点击 ":actionText" 按钮, 复制以下链接到你的浏览器并打开: [:url](:url)',
        'regards' => '此致，',
    ],
    'fields' => [
        'block-editor' => [
            'add-content' => '添加模块',
            'collapse-all' => '全部折叠',
            'create-another' => '继续创建',
            'delete' => '删除',
            'expand-all' => '全部展开',
            'loading' => '加载中',
            'open-in-editor' => '可视化编辑器',
            'preview' => '预览',
        ],
        'browser' => [
            'add-label' => '添加',
            'attach' => '添加项目',
        ],
        'files' => [
            'add-label' => '添加',
        ],
        'generic' => [
            'switch-language' => '切换语言',
        ],
        'map' => [
            'hide' => '隐藏地图',
            'show' => '显示地图',
        ],
        'medias' => [
            'btn-label' => '添加图片',
            'crop' => '裁切',
            'crop-edit' => '编辑尺寸',
            'crop-list' => '尺寸',
            'crop-save' => '更新',
            'delete' => '删除',
            'download' => '下载',
            'edit-close' => '关闭',
            'edit-info' => '编辑',
            'original-dimensions' => '原始尺寸',
        ],
    ],
    'filter' => [
        'apply-btn' => '应用',
        'clear-btn' => '清除',
        'search-placeholder' => '搜索',
        'toggle-label' => '筛选',
    ],
    'footer' => [
        'version' => '版本',
    ],
    'form' => [
        'content' => '内容',
        'dialogs' => [
            'delete' => [
                'confirm' => '删除',
                'confirmation' => '确定吗 ?<br />此操作无法恢复。',
                'delete-content' => '删除内容',
                'title' => '删除内容',
            ],
        ],
        'editor' => '可视化编辑器',
    ],
    'lang-manager' => [
        'published' => '已发布',
    ],
    'lang-switcher' => [
        'edit-in' => '为另一语言修改',
    ],
    'listing' => [
        'add-new-button' => '添加',
        'bulk-actions' => '批量操作',
        'bulk-clear' => '清除',
        'columns' => [
            'featured' => '特别展示',
            'name' => '名称',
            'published' => '已发布',
            'show' => '展示',
            'thumbnail' => '缩略图',
        ],
        'dialogs' => [
            'delete' => [
                'confirm' => '删除',
                'disclaimer' => '此内容将被移至回收站',
                'move-to-trash' => '移至回收站',
                'title' => '删除项目',
            ],
            'destroy' => [
                'confirm' => '删除',
                'destroy-permanently' => '彻底删除',
                'disclaimer' => '删除内容将无法恢复',
                'title' => '彻底删除内容',
            ],
        ],
        'dropdown' => [
            'delete' => '移至回收站',
            'destroy' => '彻底删除',
            'duplicate' => '复制',
            'edit' => '编辑',
            'publish' => '发布',
            'feature' => '特别展示',
            'restore' => '恢复',
            'unfeature' => '取消特别展示',
            'unpublish' => '取消发布',
        ],
        'filter' => [
            'all-items' => '全部',
            'draft' => '草稿',
            'mine' => '我的',
            'published' => '已发布',
            'trash' => '垃圾箱',
        ],
        'languages' => '语言',
        'listing-empty-message' => '没有内容',
        'paginate' => [
            'rows-per-page' => '每页行数：',
        ],
    ],
    'main' => [
        'create' => '创建',
        'draft' => '草稿',
        'published' => '已发布',
        'title' => '标题',
        'update' => '更新',
    ],
    'media-library' => [
        'files' => '文件',
        'filter-select-label' => '以标签进行筛选',
        'images' => '图片',
        'insert' => '插入',
        'sidebar' => [
            'alt-text' => '替代文字',
            'caption' => '描述',
            'clear' => '清除',
            'dimensions' => '尺寸',
            'empty-text' => '没有选中文件',
            'files-selected' => '已选中文件',
            'tags' => '标签',
        ],
        'title' => '媒体库',
        'update' => '更新',
    ],
    'modal' => [
        'create' => [
            'button' => '创建',
            'create-another' => '继续创建',
            'title' => '创建新内容',
        ],
        'permalink-field' => '链接',
        'title-field' => '标题',
        'update' => [
            'button' => '更新',
            'title' => '更新',
        ],
    ],
    'nav' => [
        'admin' => '管理员',
        'cms-users' => '用户',
        'logout' => '注销',
        'media-library' => '媒体库',
        'settings' => '设置',
    ],
    'notifications' => [
        'reset' => [
            'action' => '重置密码',
            'content' => '您收到这封邮件因为我们收到了你的密码重置申请，如果不是你操作的，请忽视本邮件。',
        ],
        'welcome' => [
            'action' => '设置你的密码',
            'content' => '你收到本邮件因为我们为你创建了一个新账号 :name.',
            'title' => '欢迎',
        ],
    ],
    'overlay' => [
        'close' => '关闭',
    ],
    'previewer' => [
        'compare-view' => '对比模式',
        'current-revision' => '当前修改',
        'editor' => '编辑器',
        'last-edit' => '最后一次编辑',
        'past-revision' => '曾经编辑',
        'restore' => '恢复',
        'revision-history' => '修改历史',
        'single-view' => '单一模式',
        'title' => '预览修改内容',
        'unsaved' => '预览模式(内容未保存)',
    ],
    'publisher' => [
        'cancel' => '取消',
        'current' => '当前的',
        'end-date' => '结束日期',
        'immediate' => '立即',
        'languages' => '语言',
        'languages-published' => '已发布',
        'last-edit' => '最后一次编辑',
        'preview' => '预览修改',
        'publish' => '发布',
        'publish-close' => '发布并关闭',
        'publish-new' => '发布并创建新内容',
        'published-on' => '发布日期',
        'restore-draft' => '恢复为草稿',
        'restore-draft-close' => '恢复为草稿并关闭',
        'restore-draft-new' => '恢复为草稿并创建新的',
        'restore-live' => '恢复为已发布',
        'restore-live-close' => '恢复为已发布并关闭',
        'restore-live-new' => '恢复为已发布并创建新的',
        'restore-message' => '你当前在编辑一个旧的版本(由 :user 在 :date 所修改)，请修改完成后点击恢复将其保存。',
        'restore-success' => '已恢复',
        'revisions' => '历史修改',
        'save' => '保存为草稿',
        'save-close' => '保存为草稿并关闭',
        'save-new' => '保存为草稿并创建新内容',
        'save-success' => '内容已保存',
        'start-date' => '开始日期',
        'switcher-title' => '状态',
        'update' => '更新',
        'update-close' => '更新并关闭',
        'update-new' => '更新并创建新内容',
    ],
    'select' => [
        'empty-text' => '请选择选项',
    ],
    'uploader' => [
        'dropzone-text' => '或者将文件拖拽至此处',
        'upload-btn-label' => '上传文件',
    ],
    'user-management' => [
        '2fa' => '双重验证',
        '2fa-description' => '请用Google Authenticator或相似兼容软件扫描此二维码，并输入一次性密码。<a href=":link" target="_blank" rel="noopener">兼容列表</a>.',
        '2fa-disable' => '请输入你的一次性密码来关闭双重验证',
        'active' => '已激活',
        'cancel' => '取消',
        'content-fieldset-label' => '用户设置',
        'description' => '描述',
        'disabled' => '已停用',
        'edit-modal-title' => '修改名字',
        'email' => '邮箱',
        'enable-user' => '激活用户',
        'enable-user-and-close' => '激活用户并关闭当前窗口',
        'enable-user-and-create-new' => '激活用户并创建新用户',
        'enabled' => '已激活',
        'language' => '语言',
        'language-placeholder' => '选择语言',
        'name' => '名字',
        'otp' => '一次性密码',
        'profile-image' => '头像',
        'role' => '角色',
        'role-placeholder' => '选择一个角色',
        'title' => '标题',
        'trash' => '已删除',
        'update' => '更新',
        'update-and-close' => '更新并关闭当前窗口',
        'update-and-create-new' => '更新并创建新用户',
        'update-disabled-and-close' => '更新并关闭窗口',
        'update-disabled-user' => '更新',
        'update-disabled-user-and-create-new' => '更新并创建新用户',
        'user-image' => '头像',
        'users' => '用户',
    ],
];
