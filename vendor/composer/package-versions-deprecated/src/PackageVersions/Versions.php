<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'drupal/recommended-project';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => '1.3.0@b9c31def6a83f84b4d4a40d35996d375755f0e08',
  'bower-asset/colorbox' => '1.6.4@bac78120c6ca9e63370cc317ab6f400129cd6608',
  'bower-asset/jquery' => '3.6.0@e786e3d9707ffd9b0dd330ca135b66344dcef85a',
  'bower-asset/lazysizes' => '5.3.1@81cf774c6a7f4d8f7f3909e225a65d8acb10cb20',
  'caxy/php-htmldiff' => 'v0.1.12@7fb8aa0ad77864f1d3604ae4a31af9cbabb91485',
  'chi-teck/drupal-code-generator' => '1.33.1@5f814e980b6f9cf1ca8c74cc9385c3d81090d388',
  'composer/installers' => 'v1.11.0@ae03311f45dfe194412081526be2e003960df74b',
  'composer/semver' => '3.2.5@31f3ea725711245195f62e54ffa402d8ef2fdba9',
  'consolidation/annotated-command' => '4.2.4@ec297e05cb86557671c2d6cbb1bebba6c7ae2c60',
  'consolidation/config' => '1.2.1@cac1279bae7efb5c7fb2ca4c3ba4b8eb741a96c1',
  'consolidation/filter-via-dot-access-data' => '1.0.0@a53e96c6b9f7f042f5e085bf911f3493cea823c6',
  'consolidation/log' => '2.0.2@82a2aaaa621a7b976e50a745a8d249d5085ee2b1',
  'consolidation/output-formatters' => '4.1.2@5821e6ae076bf690058a4de6c94dce97398a69c9',
  'consolidation/robo' => '2.2.2@b365df174d9cfb0f5814e4f3275a1c558b17bc4c',
  'consolidation/self-update' => '1.2.0@dba6b2c0708f20fa3ba8008a2353b637578849b4',
  'consolidation/site-alias' => '3.1.0@9ed3c590be9fcf9fea69c73456c2fd4b27f5204c',
  'consolidation/site-process' => '4.1.0@ef57711d7049f7606ce936ded16ad93f1ad7f02c',
  'container-interop/container-interop' => '1.2.0@79cbf1341c22ec75643d841642dd5d6acd83bdb8',
  'cweagans/composer-patches' => '1.7.1@9888dcc74993c030b75f3dd548bb5e20cdbd740c',
  'dflydev/dot-access-data' => 'v1.1.0@3fbd874921ab2c041e899d044585a2ab9795df8a',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '1.12.1@4cf401d14df219fa6f38b671f5493449151c9ad8',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'drupal/admin_toolbar' => '3.0.1@3.0.1',
  'drupal/adminimal_admin_toolbar' => '1.11.0@8.x-1.11',
  'drupal/adminimal_theme' => '1.6.0@8.x-1.6',
  'drupal/allowed_formats' => '1.3.0@8.x-1.3',
  'drupal/auto_entitylabel' => '3.0.0-beta4@8.x-3.0-beta4',
  'drupal/better_exposed_filters' => '5.0.0-beta3@8.x-5.0-beta3',
  'drupal/block_class' => '1.3.0@8.x-1.3',
  'drupal/chosen' => '3.0.1@3.0.1',
  'drupal/chosen_lib' => '3.0.1@',
  'drupal/ckeditor_config' => '3.0.0@8.x-3.0',
  'drupal/coffee' => '1.2.0@8.x-1.2',
  'drupal/colorbox' => '1.7.0@8.x-1.7',
  'drupal/composer_deploy' => '1.6.0@8.x-1.6',
  'drupal/conditional_fields' => '4.0.0-alpha1@4.0.0-alpha1',
  'drupal/config_filter' => '1.8.0@8.x-1.8',
  'drupal/config_ignore' => '2.3.0@8.x-2.3',
  'drupal/config_split' => '1.7.0@8.x-1.7',
  'drupal/config_update' => '1.7.0@8.x-1.7',
  'drupal/core' => '9.2.4@c723626030c728ec2f9f6526e6cd5f029c9e628c',
  'drupal/core-composer-scaffold' => '9.2.4@e146f2d0bab60c798c7cc91eae79f25c43a96899',
  'drupal/core-recommended' => '9.2.4@b8f3420017a6e03f1402ee6058c6da16bba9b257',
  'drupal/crop' => '2.1.0@8.x-2.1',
  'drupal/ctools' => '3.7.0@8.x-3.7',
  'drupal/devel' => '4.1.1@4.1.1',
  'drupal/diff' => '1.0.0@8.x-1.0',
  'drupal/embed' => '1.4.0@8.x-1.4',
  'drupal/entity' => '1.2.0@8.x-1.2',
  'drupal/entity_browser' => '2.6.0@8.x-2.6',
  'drupal/entity_embed' => '1.1.0@8.x-1.1',
  'drupal/entity_reference_revisions' => '1.9.0@8.x-1.9',
  'drupal/entity_type_clone' => '1.7.0@8.x-1.7',
  'drupal/environment_indicator' => '4.0.3@4.0.3',
  'drupal/facets' => '1.8.0@8.x-1.8',
  'drupal/features' => '3.12.0@8.x-3.12',
  'drupal/field_group' => '3.2.0@8.x-3.2',
  'drupal/focal_point' => '1.5.0@8.x-1.5',
  'drupal/form_display_field_machine_name' => '1.3.0@8.x-1.3',
  'drupal/gin' => '3.0.0-alpha36@8.x-3.0-alpha36',
  'drupal/gin_toolbar' => '1.0.0-beta19@8.x-1.0-beta19',
  'drupal/git_deploy' => '2.3.0@8.x-2.3',
  'drupal/google_analytics' => '2.5.0@8.x-2.5',
  'drupal/honeypot' => '2.0.1@2.0.1',
  'drupal/inline_entity_form' => '1.0.0-rc9@8.x-1.0-rc9',
  'drupal/jquery_ui' => '1.4.0@8.x-1.4',
  'drupal/jquery_ui_accordion' => '1.1.0@8.x-1.1',
  'drupal/jquery_ui_checkboxradio' => '1.2.0@8.x-1.2',
  'drupal/jquery_ui_datepicker' => '1.1.0@8.x-1.1',
  'drupal/jquery_ui_slider' => '1.1.0@8.x-1.1',
  'drupal/jquery_ui_touch_punch' => '1.0.0@1.0.0',
  'drupal/layout_paragraphs' => '1.0.0@1.0.0',
  'drupal/lazy' => '3.10.0@8.x-3.10',
  'drupal/linked_field' => '1.3.0@8.x-1.3',
  'drupal/linkit' => '6.0.0-beta2@6.0.0-beta2',
  'drupal/masquerade' => '2.0.0-beta4@8.x-2.0-beta4',
  'drupal/menu_admin_per_menu' => '1.3.0@8.x-1.3',
  'drupal/menu_breadcrumb' => '1.16.0@8.x-1.16',
  'drupal/menu_link_attributes' => '1.2.0@8.x-1.2',
  'drupal/menu_position' => '1.0.0-beta1@8.x-1.0-beta1',
  'drupal/metatag' => '1.16.0@8.x-1.16',
  'drupal/module_filter' => '3.2.0@8.x-3.2',
  'drupal/multiple_fields_remove_button' => '1.0.0-alpha13@8.x-1.0-alpha13',
  'drupal/paragraphs' => '1.12.0@8.x-1.12',
  'drupal/paragraphs_browser' => '1.0.0@8.x-1.0',
  'drupal/pathauto' => '1.8.0@8.x-1.8',
  'drupal/rabbit_hole' => '1.0.0-beta10@8.x-1.0-beta10',
  'drupal/rebuild_cache_access' => '1.7.0@8.x-1.7',
  'drupal/redirect' => '1.6.0@8.x-1.6',
  'drupal/responsive_favicons' => '1.6.0@8.x-1.6',
  'drupal/responsive_preview' => '1.0.0@8.x-1.0',
  'drupal/role_delegation' => '1.1.0@8.x-1.1',
  'drupal/schema_metatag' => '2.2.0@8.x-2.2',
  'drupal/search_api' => '1.20.0@8.x-1.20',
  'drupal/search_api_autocomplete' => '1.5.0@8.x-1.5',
  'drupal/smart_date' => '3.4.0@3.4.0',
  'drupal/smart_trim' => '1.3.0@8.x-1.3',
  'drupal/stage_file_proxy' => '1.1.0@8.x-1.1',
  'drupal/taxonomy_access_fix' => '3.1.0@8.x-3.1',
  'drupal/token' => '1.9.0@8.x-1.9',
  'drupal/twig_tweak' => '3.1.2@3.1.2',
  'drupal/upgrade_status' => '3.9.0@8.x-3.9',
  'drupal/view_mode_selector' => '1.0.0-beta1@8.x-1.0-beta1',
  'drupal/viewfield' => '3.0.0-beta6@8.x-3.0-beta6',
  'drupal/views_bulk_edit' => '2.6.0@8.x-2.6',
  'drupal/views_bulk_operations' => '4.0.0@4.0.0',
  'drupal/views_contextual_filters_or' => '1.2.0@8.x-1.2',
  'drupal/webform' => '6.0.4@6.0.4',
  'drupal/xmlsitemap' => '1.0.0@8.x-1.0',
  'drush/drush' => '10.6.0@c86d327359baddb0a2f51bb458703826469a0445',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'enlightn/security-checker' => 'v1.9.0@dc5bce653fa4d9c792e9dcffa728c0642847c1e1',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'grasmash/expander' => '1.0.0@95d6037344a4be1dd5f8e0b0b2571a28c397578f',
  'grasmash/yaml-expander' => '1.4.0@3f0f6001ae707a24f4d9733958d77d92bf9693b1',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.2@dc960a912984efb74d0a90222870c72c87f10c91',
  'harvesthq/chosen' => 'v1.8.7@ad86732b668627c131e61ee8f0e6e9ed52e4db8d',
  'kint-php/kint' => '3.3@335ac1bcaf04d87df70d8aa51e8887ba2c6d203b',
  'kint-php/kint-js' => '2.0@d2455136a19f87aed682bb803790a0f71ad4be41',
  'kint-php/kint-twig' => '3.0@876b38c496d6bdfe6482647e8512e32e4528d811',
  'laminas/laminas-diactoros' => '2.6.0@7d2034110ae18afe05050b796a3ee4b3fe177876',
  'laminas/laminas-escaper' => '2.7.0@5e04bc5ae5990b17159d79d331055e2c645e5cc5',
  'laminas/laminas-feed' => '2.14.1@463fdae515fba30633906098c258d3b2c733c15c',
  'laminas/laminas-servicemanager' => '3.7.0@2b0aee477fdbd3191af7c302b93dbc5fda0626f4',
  'laminas/laminas-stdlib' => '3.3.1@d81c7ffe602ed0e6ecb18691019111c0f4bf1efe',
  'laminas/laminas-text' => '2.8.1@d696fa1fb3880b9b8f02c08be58685013b421608',
  'laminas/laminas-zendframework-bridge' => '1.2.0@6cccbddfcfc742eb02158d6137ca5687d92cee32',
  'league/container' => '2.5.0@8438dc47a0674e3378bcce893a0a04d79a2c22b3',
  'masterminds/html5' => '2.7.4@9227822783c75406cfe400984b2f095cdf03d417',
  'mathieuviossat/arraytotexttable' => 'v1.0.8@6b1af924478cb9c3a903269e304fff006fe0dbf4',
  'mglaman/phpstan-drupal' => '0.12.12@548fa7cb31239997863bf695f04a9fefd04c7288',
  'mkalkbrenner/php-htmldiff-advanced' => '0.0.8@3a714b48c9c3d3730baaf6d3949691e654cd37c9',
  'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
  'nette/utils' => 'v3.2.3@5c36cc1ba9bb6abb8a9e425cf054e0c3fd5b9822',
  'nikic/php-parser' => 'v4.12.0@6608f01670c3cc5079e18c1dab1104e002579143',
  'npm-asset/jquery-ui-touch-punch' => '0.2.3@',
  'oomphinc/composer-installers-extender' => '2.0.0@8d3fe38a1723e0e91076920c8bb946b1696e28ca',
  'pear/archive_tar' => '1.4.14@4d761c5334c790e45ef3245f0864b8955c562caa',
  'pear/console_getopt' => 'v1.4.3@a41f8d3e668987609178c7c4a9fe48fecac53fa0',
  'pear/pear-core-minimal' => 'v1.10.10@625a3c429d9b2c1546438679074cac1b089116a7',
  'pear/pear_exception' => 'v1.0.2@b14fbe2ddb0b9f94f5b24cf08783d599f776fff0',
  'phpstan/phpstan' => '0.12.95@4ffddfe86e85dcc494a47e5f3dcfd1a2dccdce58',
  'phpstan/phpstan-deprecation-rules' => '0.12.6@46dbd43c2db973d2876d6653e53f5c2cc3a01fbb',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psy/psysh' => 'v0.10.8@e4573f47750dd6c92dca5aee543fa77513cbd8d3',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'simshaun/recurr' => 'v4.0.5@08b0b46879f598cd11dd42b4c1a9c221a0562749',
  'stack/builder' => 'v1.0.6@a4faaa6f532c6086bc66c29e1bc6c29593e1ca7c',
  'symfony-cmf/routing' => '2.3.3@3c97e7b7709b313cecfb76d691ad4cc22acbf3f5',
  'symfony/console' => 'v4.4.25@a62acecdf5b50e314a4f305cd01b5282126f3095',
  'symfony/debug' => 'v4.4.25@a8d2d5c94438548bff9f998ca874e202bb29d07f',
  'symfony/dependency-injection' => 'v4.4.25@2ed2a0a6c960bf4e2e862ec77b2f2c558b83c64d',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/error-handler' => 'v4.4.25@310a756cec00d29d89a08518405aded046a54a8b',
  'symfony/event-dispatcher' => 'v4.4.25@047773e7016e4fd45102cedf4bd2558ae0d0c32f',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/filesystem' => 'v4.4.27@517fb795794faf29086a77d99eb8f35e457837a7',
  'symfony/finder' => 'v4.4.27@42414d7ac96fc2880a783b872185789dea0d4262',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v4.4.25@0c79d5a65ace4fe66e49702658c024a419d2438b',
  'symfony/http-kernel' => 'v4.4.25@3795165596fe81a52296b78c9aae938d434069cc',
  'symfony/mime' => 'v5.3.0@ed710d297b181f6a7194d8172c9c2423d58e4852',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-iconv' => 'v1.23.0@63b5bb7db83e5673936d6e3b8b3e022ff6474933',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/process' => 'v4.4.25@cd61e6dd273975c6625316de9d141ebd197f93c9',
  'symfony/psr-http-message-bridge' => 'v2.1.0@81db2d4ae86e9f0049828d9343a72b9523884e5d',
  'symfony/routing' => 'v4.4.25@3a3c2f197ad0846ac6413225fc78868ba1c61434',
  'symfony/serializer' => 'v4.4.25@6db3eb4f1bb437cd3730f52353ba4b568acaddf5',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/translation' => 'v4.4.25@dfe132c5c6d89f90ce7f961742cc532e9ca16dd4',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/validator' => 'v4.4.25@29c14955e8b2e7351aaa11553cb36d4a689b7b11',
  'symfony/var-dumper' => 'v5.3.0@1d3953e627fe4b5f6df503f356b6545ada6351f3',
  'symfony/yaml' => 'v4.4.25@81cdac5536925c1c4b7b50aabc9ff6330b9eb5fc',
  'twig/twig' => 'v2.14.6@27e5cf2b05e3744accf39d4c68a3235d9966d260',
  'typo3/phar-stream-wrapper' => 'v3.1.6@60131cb573a1e478cfecd34e4ea38e3b31505f75',
  'webflo/drupal-finder' => '1.2.2@c8e5dbe65caef285fec8057a4c718a0d4138d1ee',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'webmozart/path-util' => '2.3.0@d939f7edc24c9a1bb9c0dee5cb05d8e859490725',
  'zaporylie/composer-drupal-optimizations' => '1.2.0@a7f409a765164fd13ac0bd00e19109165c51b369',
  'behat/mink' => 'v1.8.1@07c6a9fe3fa98c2de074b25d9ed26c22904e3887',
  'behat/mink-goutte-driver' => 'v1.2.1@8b9ad6d2d95bc70b840d15323365f52fcdaea6ca',
  'behat/mink-selenium2-driver' => 'v1.4.0@312a967dd527f28980cce40850339cd5316da092',
  'composer/ca-bundle' => '1.2.10@9fdb22c2e97a614657716178093cd1da90a64aa8',
  'composer/composer' => '2.1.6@e5cac5f9d2354d08b67f1d21c664ae70d748c603',
  'composer/metadata-minifier' => '1.0.0@c549d23829536f0d0e984aaabbf02af91f443207',
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'composer/spdx-licenses' => '1.5.5@de30328a7af8680efdc03e396aad24befd513200',
  'composer/xdebug-handler' => '2.0.2@84674dd3a7575ba617f5a76d7e9e29a7d3891339',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'drupal/coder' => '8.3.13@d3286d571b19633cc296d438c36b9aed195de43c',
  'drupal/core-dev' => '9.2.4@4b5b8556711315e180d72830733ddb07a57a2d73',
  'easyrdf/easyrdf' => '1.1.1@c7b0a9dbcb211eb7de03ee99ff5b52d17f2a8e64',
  'fabpot/goutte' => 'v3.3.1@80a23b64f44d54dd571d114c473d9d7e9ed84ca5',
  'friends-of-behat/mink-browserkit-driver' => 'v1.5.0@8110b99ed1ac2b50ad287280bfc20e08f58b6cc6',
  'instaclick/php-webdriver' => '1.4.9@961b12178cb71f8667afaf2f66ab3e000e060e1c',
  'jean85/pretty-package-versions' => '1.6.0@1e0104b46f045868f11942aea058cd7186d6c303',
  'justinrainbow/json-schema' => '5.2.11@2ab6744b7296ded80f8cc4f9509abbff393399aa',
  'mglaman/drupal-check' => '1.1.10@b7bcfb2f766332a888bb6d550dedbb508a3a9d41',
  'mikey179/vfsstream' => 'v1.6.9@2257e326dc3d0f50e55d0a90f71e37899f029718',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nette/neon' => 'v3.2.2@e4ca6f4669121ca6876b1d048c612480e39a28d5',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '9.2.6@f6293e1b30a2354e8428e004689671b83871edde',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.8@191768ccd5c85513b4068bdbe99bb6390c7d54fb',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'seld/phar-utils' => '1.1.2@749042a2315705d2dfbbc59234dd9ceb22bf3ff0',
  'sirbrillig/phpcs-variable-analysis' => 'v2.11.2@3fad28475bfbdbf8aa5c440f8a8f89824983d85e',
  'squizlabs/php_codesniffer' => '3.6.0@ffced0d2c8fa8e6cdc4d695a743271fab6c38625',
  'symfony/browser-kit' => 'v4.4.27@9629d1524d8ced5a4ec3e94abdbd638b4ec8319b',
  'symfony/css-selector' => 'v4.4.27@5194f18bd80d106f11efa8f7cd0fbdcc3af96ce6',
  'symfony/dom-crawler' => 'v4.4.27@86aa075c9e0b13ac7db8d73d1f9d8b656143881a',
  'symfony/lock' => 'v4.4.27@6ca476d4ac992802f2a4043929f68f1818449486',
  'symfony/phpunit-bridge' => 'v5.3.4@bc368b765a651424b19f5759953ce2873e7d448b',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'drupal/recommended-project' => 'dev-master@9ba75a8979c6db2f18353d2b95fed9cc5bf44afc',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
