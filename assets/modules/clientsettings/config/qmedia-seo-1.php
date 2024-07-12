<?php

return [
  'menu' => [
    'alias' => 'SEO',
    'caption' => 'SEO / Аналитика',
    'icon' => 'fa-search',
  ],

  'caption' => 'SEO-теги',
  'introtext' => '
  <p>
    Управление содержимым тегов h1, title, meta (description, keywords)
  </p>
  <div class="element-edit-message-tab alert alert-warning">
    Подробнее в <a href="https://gist.github.com/qmedia-dev/f8880c0a3fcd669a44c6a1cd33116ede#seo-теги" target="_blank">документации</a> (содержит подробное описание и примеры blade-шаблонизаций)
  </div>',
  'settings' => [
    'seo_h1' => [
      'caption' => 'H1<br><span class="comment">&lt;h1&gt; ___ &lt;/h1&gt;</span>',
      'type'  => 'textareamini',
    ],
    'seo_title' => [
      'caption' => 'Title<br><span class="comment">&lt;title&gt; ___ &lt;/title&gt;</span>',
      'type'  => 'textareamini',
    ],
    'seo_description' => [
      'caption' => 'Meta-description<br><span class="comment">&lt;meta name="description" content=" ___ "&gt;</span>',
      'type'  => 'textareamini',
    ],
    'seo_keywords' => [
      'caption' => 'Meta-keywords<br><span class="comment">&lt;meta name="keywords" content=" ___ "&gt;</span>',
      'type'  => 'textareamini',
    ],
  ],
];
