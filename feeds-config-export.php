<?php
$feeds_importer = new stdClass();
$feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
$feeds_importer->api_version = 1;
$feeds_importer->id = 'hrworks_articles';
$feeds_importer->config = array(
  'name' => 'HRWorks Articles',
  'description' => 'import the things',
  'fetcher' => array(
    'plugin_key' => 'FeedsFileFetcher',
    'config' => array(
      'allowed_extensions' => 'txt csv tsv xml opml',
      'direct' => FALSE,
      'directory' => 'private://feeds',
      'allowed_schemes' => array(
        0 => 'public',
        1 => 'private',
      ),
    ),
  ),
  'parser' => array(
    'plugin_key' => 'FeedsExXml',
    'config' => array(
      'use_tidy' => FALSE,
      'sources' => array(
        'title' => array(
          'name' => 'title',
          'value' => 'title',
          'raw' => 0,
          'inner' => 0,
          'debug' => 0,
          'weight' => '1',
        ),
        'type' => array(
          'name' => 'type',
          'value' => '@type',
          'raw' => 0,
          'inner' => 0,
          'debug' => 0,
          'weight' => '2',
        ),
        'body' => array(
          'name' => 'body',
          'value' => 'body',
          'raw' => 0,
          'inner' => 0,
          'debug' => 0,
          'weight' => '3',
        ),
        'author' => array(
          'name' => 'author',
          'value' => '@author',
          'raw' => 0,
          'inner' => 0,
          'debug' => 0,
          'weight' => '4',
        ),
        'inrbj' => array(
          'name' => 'inRBJ',
          'value' => '@inRBJ',
          'raw' => 0,
          'inner' => 0,
          'debug' => 0,
          'weight' => '5',
        ),
        'related_service' => array(
          'name' => 'related service',
          'value' => 'articleMeta/relatedSolution',
          'raw' => 0,
          'inner' => 0,
          'debug' => 0,
          'weight' => '6',
        ),
        'published_date' => array(
          'name' => 'published date',
          'value' => 'articleMeta/publishedDate',
          'raw' => 0,
          'inner' => 0,
          'debug' => 0,
          'weight' => '7',
        ),
        'og_url' => array(
          'name' => 'OG Url',
          'value' => 'articleMeta/ogURL',
          'raw' => 0,
          'inner' => 0,
          'debug' => 0,
          'weight' => '9',
        ),
        'og_path' => array(
          'name' => 'OG Path',
          'value' => 'articleMeta/redirrectURL',
          'raw' => 0,
          'inner' => 0,
          'debug' => 0,
          'weight' => '10',
        ),
      ),
      'context' => array(
        'value' => '/articles/article',
      ),
      'display_errors' => 0,
      'source_encoding' => array(
        0 => 'auto',
      ),
      'debug_mode' => 0,
    ),
  ),
  'processor' => array(
    'plugin_key' => 'FeedsNodeProcessor',
    'config' => array(
      'expire' => '-1',
      'author' => '1',
      'authorize' => 1,
      'mappings' => array(
        0 => array(
          'source' => 'title',
          'target' => 'title',
          'unique' => FALSE,
          'language' => 'und',
        ),
        1 => array(
          'source' => 'type',
          'target' => 'field_hrworks_article_type',
          'unique' => FALSE,
          'language' => 'und',
        ),
        2 => array(
          'source' => 'body',
          'target' => 'body',
          'unique' => FALSE,
          'language' => 'und',
        ),
        3 => array(
          'source' => 'author',
          'target' => 'field_hrworks_article_author',
          'unique' => FALSE,
          'language' => 'und',
        ),
        4 => array(
          'source' => 'inrbj',
          'target' => 'field_hrworks_appears_in_rbj',
          'unique' => FALSE,
          'language' => 'und',
        ),
        5 => array(
          'source' => 'related_service',
          'target' => 'field_related_hrworks_solution:etid',
          'unique' => FALSE,
          'language' => 'und',
        ),
        6 => array(
          'source' => 'og_path',
          'target' => 'field_old_url',
          'unique' => FALSE,
          'language' => 'und',
        ),
        7 => array(
          'source' => 'published_date',
          'target' => 'published_at',
          'unique' => FALSE,
        ),
      ),
      'insert_new' => '1',
      'update_existing' => '2',
      'update_non_existent' => 'skip',
      'input_format' => 'full_html',
      'skip_hash_check' => 0,
      'bundle' => 'hrworks_article',
      'language' => 'und',
    ),
  ),
  'content_type' => '',
  'update' => 0,
  'import_period' => 1800,
  'expire_period' => 3600,
  'import_on_create' => TRUE,
  'process_in_background' => FALSE,
);
