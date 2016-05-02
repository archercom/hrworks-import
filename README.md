# HRWorks Import

> shout out to:
> https://www.chenhuijing.com/blog/drupal-101-what-i-learnt-from-hours-of-troubleshooting-feeds/
> https://www.drupal.org/node/1279618#comment-10736364
> https://www.drupal.org/node/622700


This module is designed to:

1. Add URL redirrects on Feeds import
2. Populate the "Publish Date" (published_at) field instead of Authored (created)

Import the php code in feeds-config-export.php
Upload the sample.xml



## module dependancies:
https://www.drupal.org/project/feeds
https://www.drupal.org/project/feeds_ex (for XPath use in XML)
https://www.drupal.org/project/feedspreview   * optional



Current status:

√ Can import 1 article (sample.xml)
√ Can import multiple articles (sample.xml)
√ Can import different Article Types correctly (article, press-release, industry-update [text list])
√ handle authors (candace, paula, or empty value [text list])
√ inRBJ boolean
√ related HR Solution (entity)
√ url redirrects
√ the published date (publication_date)
