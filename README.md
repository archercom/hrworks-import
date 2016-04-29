# HRWorks Import

> shout out to:
> https://www.chenhuijing.com/blog/drupal-101-what-i-learnt-from-hours-of-troubleshooting-feeds/


This module is designed to:

1. Add URL redirrects on Feeds import
2. Populate the "Publish Date" (published_at) field instead of Authored (created)

Import the php code in feeds-config-export.php
Upload the sample.xml



## modules used:
https://www.drupal.org/project/feeds
https://www.drupal.org/project/feeds_ex (for XPath use in XML)
https://www.drupal.org/project/feedspreview   * optional

helpful:
https://www.drupal.org/node/622700




Current status:
√ Can import 1 article (sample.xml)
√ Can import multiple articles (sample.xml)
√ Can import different Article Types correctly (article, press-release, industry-update [text list])
√ handle authors (candace, paula, or empty value [text list])
√ inRBJ boolean
√ related HR Solution (entity)
√ url redirrects
the published date (will come back to it)
  works but places the date under Authing Information..
  might be worth conceding... will have to change views
  does this mean we get rid of the published_at module and everything?...
  also what if we set the scheduled date as the date in the past?
    because the scheduled published date is in the past, it'll get published
    immediately and should use the date from the past


but what am i trying to do really?
2   i want to populate the Publication Date field
