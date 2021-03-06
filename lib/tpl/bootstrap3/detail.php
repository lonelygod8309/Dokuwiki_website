<?php
/**
 * DokuWiki Bootstrap3 Template: Image Detail Page
 *
 * @link     http://dokuwiki.org/template:bootstrap3
 * @author   Andreas Gohr <andi@splitbrain.org>
 * @author   Anika Henke <anika@selfthinker.org>
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

if (!defined('DOKU_INC')) die(); // must be run from within DokuWiki

require_once(template('tpl/global.php'));
require_once(template('tpl/functions.php'));

global $ACT;
global $conf;
global $ERROR;
global $IMG;
global $INPUT;
global $lang;
global $TEMPLATE;
global $REV;

header('X-UA-Compatible: IE=edge,chrome=1');


$metadata = array(

    'exif' => array(
        'Exif.ImageDescription',
        'Exif.Make',
        'Exif.Model',
        'Exif.Orientation',
        'Exif.XResolution',
        'Exif.YResolution',
        'Exif.ResolutionUnit',
        'Exif.Software',
        'Exif.DateTime',
        'Exif.Artist',
        'Exif.WhitePoint',
        'Exif.PrimaryChromaticities',
        'Exif.YCbCrCoefficients',
        'Exif.YCbCrSubSampling',
        'Exif.YCbCrPositioning',
        'Exif.ReferenceBlackWhite',
        'Exif.Copyright',
        'Exif.ExifIFDOffset',
        'Exif.GPSIFDOffset',
        'Exif.TIFFNewSubfileType',
        'Exif.TIFFSubfileType',
        'Exif.TIFFImageWidth',
        'Exif.TIFFImageHeight',
        'Exif.TIFFBitsPerSample',
        'Exif.TIFFCompression',
        'Exif.TIFFPhotometricInterpretation',
        'Exif.TIFFThreshholding',
        'Exif.TIFFCellWidth',
        'Exif.TIFFCellLength',
        'Exif.TIFFFillOrder',
        'Exif.TIFFImageDescription',
        'Exif.TIFFMake',
        'Exif.TIFFModel',
        'Exif.TIFFStripOffsets',
        'Exif.TIFFOrientation',
        'Exif.TIFFSamplesPerPixel',
        'Exif.TIFFRowsPerStrip',
        'Exif.TIFFStripByteCounts',
        'Exif.TIFFMinSampleValue',
        'Exif.TIFFMaxSampleValue',
        'Exif.TIFFXResolution',
        'Exif.TIFFYResolution',
        'Exif.TIFFPlanarConfiguration',
        'Exif.TIFFGrayResponseUnit',
        'Exif.TIFFGrayResponseCurve',
        'Exif.TIFFResolutionUnit',
        'Exif.TIFFSoftware',
        'Exif.TIFFDateTime',
        'Exif.TIFFArtist',
        'Exif.TIFFHostComputer',
        'Exif.TIFFColorMap',
        'Exif.TIFFExtraSamples',
        'Exif.TIFFJFIFOffset',
        'Exif.TIFFJFIFLength',
        'Exif.TIFFYCbCrCoefficients',
        'Exif.TIFFYCbCrSubSampling',
        'Exif.YCbCrPositioning',
        'Exif.ReferenceBlackWhite',
        'Exif.Copyright',
        'Exif.ExifIFDOffset',
        'Exif.GPSIFDOffset',
        'Exif.TIFFNewSubfileType',
        'Exif.TIFFSubfileType',
        'Exif.TIFFImageWidth',
        'Exif.TIFFImageHeight',
        'Exif.TIFFBitsPerSample',
        'Exif.TIFFCompression',
        'Exif.TIFFPhotometricInterpretation',
        'Exif.TIFFThreshholding',
        'Exif.TIFFCellWidth',
        'Exif.TIFFCellLength',
        'Exif.TIFFFillOrder',
        'Exif.TIFFImageDescription',
        'Exif.TIFFMake',
        'Exif.TIFFModel',
        'Exif.TIFFStripOffsets',
        'Exif.TIFFOrientation',
        'Exif.TIFFSamplesPerPixel',
        'Exif.TIFFRowsPerStrip',
        'Exif.TIFFStripByteCounts',
        'Exif.TIFFMinSampleValue',
        'Exif.TIFFMaxSampleValue',
        'Exif.TIFFXResolution',
        'Exif.TIFFYResolution',
        'Exif.TIFFPlanarConfiguration',
        'Exif.TIFFGrayResponseUnit',
        'Exif.TIFFGrayResponseCurve',
        'Exif.TIFFResolutionUnit',
        'Exif.TIFFSoftware',
        'Exif.TIFFDateTime',
        'Exif.TIFFArtist',
        'Exif.TIFFHostComputer',
        'Exif.TIFFColorMap',
        'Exif.TIFFExtraSamples',
        'Exif.TIFFJFIFOffset',
        'Exif.TIFFJFIFLength',
        'Exif.TIFFYCbCrCoefficients',
        'Exif.TIFFYCbCrSubSampling',
        'Exif.TIFFYCbCrPositioning',
        'Exif.TIFFReferenceBlackWhite',
        'Exif.TIFFCopyright',
        'Exif.TIFFUserComment',
        'Exif.ExposureTime',
        'Exif.FNumber',
        'Exif.ExposureProgram',
        'Exif.SpectralSensitivity',
        'Exif.ISOSpeedRatings',
        'Exif.OECF',
        'Exif.EXIFVersion',
        'Exif.DatetimeOriginal',
        'Exif.DatetimeDigitized',
        'Exif.ComponentsConfiguration',
        'Exif.CompressedBitsPerPixel',
        'Exif.ShutterSpeedValue',
        'Exif.ApertureValue',
        'Exif.BrightnessValue',
        'Exif.ExposureBiasValue',
        'Exif.MaxApertureValue',
        'Exif.SubjectDistance',
        'Exif.MeteringMode',
        'Exif.LightSource',
        'Exif.Flash',
        'Exif.FocalLength',
        //'Exif.MakerNote',
        'Exif.UserComment',
        'Exif.SubSecTime',
        'Exif.SubSecTimeOriginal',
        'Exif.SubSecTimeDigitized',
        'Exif.FlashPixVersion',
        'Exif.ColorSpace',
        'Exif.PixelXDimension',
        'Exif.PixelYDimension',
        'Exif.RelatedSoundFile',
        'Exif.InteropIFDOffset',
        'Exif.FlashEnergy',
        'Exif.SpatialFrequencyResponse',
        'Exif.FocalPlaneXResolution',
        'Exif.FocalPlaneYResolution',
        'Exif.FocalPlaneResolutionUnit',
        'Exif.SubjectLocation',
        'Exif.ExposureIndex',
        'Exif.SensingMethod',
        'Exif.FileSource',
        'Exif.SceneType',
        'Exif.CFAPattern',
        'Exif.InteroperabilityIndex',
        'Exif.InteroperabilityVersion',
        'Exif.RelatedImageFileFormat',
        'Exif.RelatedImageWidth',
        'Exif.RelatedImageLength',
        'Exif.GPSVersionID',
        'Exif.GPSLatitudeRef',
        'Exif.GPSLatitude',
        'Exif.GPSLongitudeRef',
        'Exif.GPSLongitude',
        'Exif.GPSAltitudeRef',
        'Exif.GPSAltitude',
        'Exif.GPSTimeStamp',
        'Exif.GPSSatellites',
        'Exif.GPSStatus',
        'Exif.GPSMeasureMode',
        'Exif.GPSDOP',
        'Exif.GPSSpeedRef',
        'Exif.GPSSpeed',
        'Exif.GPSTrackRef',
        'Exif.GPSTrack',
        'Exif.GPSImgDirectionRef',
        'Exif.GPSImgDirection',
        'Exif.GPSMapDatum',
        'Exif.GPSDestLatitudeRef',
        'Exif.GPSDestLatitude',
        'Exif.GPSDestLongitudeRef',
        'Exif.GPSDestLongitude',
        'Exif.GPSDestBearingRef',
        'Exif.GPSDestBearing',
        'Exif.GPSDestDistanceRef',
        'Exif.GPSDestDistance',
    ),

    'iptc' => array(
        'Iptc.SuplementalCategories',
        'Iptc.Keywords',
        'Iptc.Caption',
        'Iptc.CaptionWriter',
        'Iptc.Headline',
        'Iptc.SpecialInstructions',
        'Iptc.Category',
        'Iptc.Byline',
        'Iptc.BylineTitle',
        'Iptc.Credit',
        'Iptc.Source',
        'Iptc.CopyrightNotice',
        'Iptc.ObjectName',
        'Iptc.City',
        'Iptc.Province State',
        'Iptc.CountryName',
        'Iptc.OriginalTransmissionReference',
        'Iptc.DateCreated',
        'Iptc.CopyrightFlag',
    ),
);


$maxwidth  = 900;
$maxheight = 700;

$originalwidth  = $w = (int) tpl_img_getTag('File.Width');
$originalheight = $h = (int) tpl_img_getTag('File.Height');

//resize to given max values
$ratio = 1;

if ($w >= $h) {
    if ($maxwidth && $w >= $maxwidth) {
        $ratio = $maxwidth / $w;
    } elseif ($maxheight && $h > $maxheight) {
        $ratio = $maxheight / $h;
    }
} else {
    if ($maxheight && $h >= $maxheight) {
        $ratio = $maxheight / $h;
    } elseif ($maxwidth && $w > $maxwidth) {
        $ratio = $maxwidth / $w;
    }
}

if ($ratio) {
    $w = floor($ratio * $w);
    $h = floor($ratio * $h);
}

$other_sizes = array();

foreach (array(0.1, 0.25, 0.5, 0.75, 1) as $ratio) {
    $other_sizes[] = array(
        'w'     => floor($ratio * $originalwidth),
        'h'     => floor($ratio * $originalheight),
        'ratio' => $ratio,
    );
}

$show_metadata = false;

?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction'] ?>" class="no-js">
<head>
    <meta charset="UTF-8" />
    <title><?php echo hsc(tpl_img_getTag('IPTC.Headline',$IMG))?> [<?php echo strip_tags($conf['title'])?>]</title>
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <?php
        echo tpl_favicon(array('favicon', 'mobile'));
        tpl_includeFile('meta.html');
        tpl_metaheaders();
    ?>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery(document).trigger('bootstrap3:detail');
    });
</script>
</head>

<body class="<?php echo $TEMPLATE->getClasses() ?>" data-img-id="<?php echo $IMG ?>">

    <header id="dokuwiki__header" class="dw-container dokuwiki container<?php echo ($TEMPLATE->isFluidContainer()) ? '-fluid' : '' ?>">
        <?php

            tpl_includeFile('topheader.html');

            // Top-Header DokuWiki page
            if ($ACT == 'show') echo $TEMPLATE->includePage('topheader');

            require_once(template('tpl/navbar.php'));

            tpl_includeFile('header.html');

            // Header DokuWiki page
            if ($ACT == 'show') echo $TEMPLATE->includePage('header');

        ?>
    </header>

    <main role="main" id="dokuwiki__top" class="dw-container pb-5 dokuwiki container<?php echo ($TEMPLATE->isFluidContainer()) ? '-fluid mx-5' : '' ?>">

        <div id="dokuwiki__pageheader">

            <?php tpl_includeFile('social.html') ?>

            <?php require_once('tpl/breadcrumbs.php'); ?>

            <p class="pageId text-right">
                <?php if($TEMPLATE->getConf('showPageId')): ?>
                    <span class="ml-1 label label-primary">{{<?php echo hsc(tpl_img_getTag('IPTC.Headline',$IMG)); ?>}}</span>
                <?php endif; ?>
            </p>

            <div id="dw__msgarea" class="small">
                <?php $TEMPLATE->getMessageArea() ?>
            </div>

        </div>

        <div class="">

            <article id="dokuwiki__detail">

                <?php require_once('tpl/page-tools.php'); // Page Tools ?>

                <div class="<?php echo ($TEMPLATE->getConf('pageOnPanel') ? 'panel panel-default px-3 py-2' : 'no-panel') ?>">
                    <div class="page <?php echo ($TEMPLATE->getConf('pageOnPanel') ? 'panel-body' : '') ?>">

                        <?php require_once(template('tpl/page-icons.php')); ?>

                        <?php if ($ERROR): print '<h1><i class="mdi mdi-alert text-warning"></i> ' . $ERROR . '</h1>'; ?>
                        <?php else: ?>
                        <?php if ($REV) echo p_locale_xhtml('showrev'); ?>

                        <h1 class="page-header">
                            <i class="mdi mdi-image text-muted"></i> <?php echo nl2br(hsc(tpl_img_getTag('simple.title'))); ?>
                        </h1>

                        <p>
                            <?php tpl_img($maxwidth, $maxheight); /* the image; parameters: maximum width, maximum height (and more) */ ?>
                        </p>

                        <p class="small my-2">
                            <i class="mdi mdi-image-size-select-large"></i> <?php echo tpl_getLang('preview_size') ?>: <a href="<?php echo ml($IMG, array('cache' => $INPUT->str('cache'), 'rev' => $REV, 'w' => $w, 'h' => $h), true, '&'); ?>"><?php echo $w; ?> × <?php echo $h; ?></a> pixels.
                            <?php echo tpl_getLang('other_resolutions') ?>: <?php foreach ($other_sizes as $size): ?> <a href="<?php echo ml($IMG, array('cache' => $INPUT->str('cache'), 'rev' => $REV, 'w' => $size['w'], 'h' => $size['h']), true, '&'); ?>" title="<?php echo floor($size['ratio'] * 100); ?>%"><?php echo $size['w']; ?> × <?php echo $size['h']; ?></a> pixels &nbsp; <?php endforeach; ?>
                        </p>

                        <p class="image-info my-3">
                            <i class="mdi mdi-image mdi-18px"></i> <a href="<?php echo ml($IMG, array('cache'=> $INPUT->str('cache'),'rev'=>$REV), true, '&'); ?>" target="_blank" title="<?php echo $lang['js']['mediadirect']; ?>"><?php echo hsc(tpl_img_getTag('IPTC.Headline',$IMG)); ?></a> ( <?php echo tpl_img_getTag('File.Width'); ?> × <?php echo tpl_img_getTag('File.Height'); ?> pixels )
                        </p>

                        <div class="image-information pt-5">

                            <h3>
                                <i class="mdi mdi-information text-primary"></i> Informations
                            </h3>

                            <div class="table-responsive">
                                <table class="table table-condensed table-striped w-auto">
                                    <tbody>
                                        <?php
                                            $tags = tpl_get_img_meta();

                                            foreach($tags as $tag) {

                                                $label = $lang[$tag['langkey']];
                                                if(!$label) $label = $tag['langkey'] . ':';

                                                echo '<tr><th>'.$label.'</th><td>';
                                                if ($tag['type'] == 'date') {
                                                    echo dformat($tag['value']);
                                                } else {
                                                    echo hsc($tag['value']);
                                                }
                                                echo '</td></tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                            <?php
                                //Comment in for Debug
                                //dbg(tpl_img_getTag('Simple.Raw'));
                            ?>

                        </div>

                        <div class="image-reference pt-5">

                            <h3>
                                <i class="mdi mdi-link-variant"></i> <?php echo $lang['reference']; ?>
                            </h3>
                            <?php
                                $media_usage = ft_mediause($IMG, true);
                                if (count($media_usage) > 0) {
                                    echo '<ul>';
                                    foreach($media_usage as $path){
                                        echo '<li>'.html_wikilink($path).'</li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo '<p>'.$lang['nothingfound'].'</p>';
                                }
                            ?>

                            <?php if (isset($lang['media_acl_warning'])): // This message is available from release 2015-08-10 "Detritus" ?>
                            <div class="alert alert-warning">
                                <i class="mdi mdi-alert"></i> <?php echo $lang['media_acl_warning']; ?>
                            </div>
                            <?php endif; ?>

                        </div>

                        <div class="image-metadata pt-5 hide">

                            <h3>
                                <i class="mdi mdi-code-tags text-success"></i> Metadata
                            </h3>

                            <div class="metadata">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#exif">Exif</a></li>
                                    <li><a data-toggle="tab" href="#iptc">IPTC</a></li>
                                </ul>
                                <div class="tab-content">
                                    <?php $active = 'active in'; foreach ($metadata as $section => $items): ?>
                                    <div id="<?php echo $section; ?>" class="tab-pane fade <?php echo $active; ?>">
                                        <div class="table-responsive">
                                            <table class="table table-condensed table-striped w-auto">
                                                <?php
                                                    foreach ($items as $tag) {

                                                        $value = tpl_img_getTag($tag);
                                                        $name  = str_ireplace("$section.", '', $tag);

                                                        if ($value !== '') {
                                                            echo "<tr><th title='$tag'>$name</th><td>$value</td></tr>";
                                                            $show_metadata = true;
                                                        }

                                                    }

                                                    $active = '';

                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <?php if ($show_metadata): ?>
                            <script>
                                jQuery(document).ready(function(){
                                    jQuery('.image-metadata').removeClass('hide');
                                });
                            </script>
                            <?php endif; ?>

                        </div>

                        <?php endif; ?>

                    </div>
                </div>

                <div class="small text-right">

                    <?php if ($TEMPLATE->getConf('showPageInfo')): ?>
                    <span class="docInfo">
                        <?php $TEMPLATE->getPageInfo() /* 'Last modified' etc */ ?>
                    </span>
                    <?php endif ?>

                    <?php if ($TEMPLATE->getConf('showLoginOnFooter')): ?>
                    <span class="loginLink hidden-print">
                        <?php
                            if ($login_item = $TEMPLATE->getToolMenuItem('user', 'login')) {
                                echo '<a '. buildAttributes($login_item->getLinkAttributes()) .'>'. inlineSVG($login_item->getSvg()) . ' ' . hsc($login_item->getLabel()) .'</a>';
                            }
                        ?>
                    </span>
                    <?php endif; ?>

                </div>

            </article>
        </div>

    </main>

    <footer id="dw__footer" class="dw-container pt-5 dokuwiki container<?php echo ($TEMPLATE->isFluidContainer()) ? '-fluid mx-5' : '' ?>">
        <?php
            // Footer hook
            tpl_includeFile('footer.html');

            // Footer DokuWiki page
            require_once(template('tpl/footer.php'));

            // Cookie-Law banner
            require_once(template('tpl/cookielaw.php'));
        ?>
    </footer>

    <a href="#dokuwiki__top" class="back-to-top hidden-print btn btn-default btn-sm" title="<?php echo $lang['skip_to_content'] ?>" accesskey="t"><i class="mdi mdi-chevron-up"></i></a>

    <div id="screen__mode"><?php /* helper to detect CSS media query in script.js */ ?>
        <span class="visible-xs-block"></span>
        <span class="visible-sm-block"></span>
        <span class="visible-md-block"></span>
        <span class="visible-lg-block"></span>
    </div>

</body>
</html>
