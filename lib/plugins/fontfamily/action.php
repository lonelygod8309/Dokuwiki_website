<?php
/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Andreas Gohr <andi@splitbrain.org>
 * @author     Rainbow-Spike <rainbow_spike@derpy.ru>
 */

// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

if(!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
require_once(DOKU_PLUGIN.'action.php');

class action_plugin_fontfamily extends DokuWiki_Action_Plugin {

    /**
     * register the eventhandlers
     *
     * @author Andreas Gohr <andi@splitbrain.org>
     */
    function register(Doku_Event_Handler $controller){
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'handle_toolbar', array ());
    }

    function handle_toolbar(&$event, $param) {
        $event->data[] = array (
            'type' => 'picker',
            'title' => $this->getLang('ff_picker'),
            'icon' => '/lib/plugins/fontfamily/images/toolbar_icon.png',
            'list' => array(
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('Arial'),
                    'icon'   => '/lib/plugins/fontfamily/images/Arial.png',
                    'open'   => '<ff Arial>',
                    'close'  => '</ff>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('BrushScriptMS'),
                    'icon'   => '/lib/plugins/fontfamily/images/BrushScriptMS.png',
                    'open'   => '<ff BrushScriptMS>',
                    'close'  => '</ff>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('ComicSansMS'),
                    'icon'   => '/lib/plugins/fontfamily/images/ComicSansMS.png',
                    'open'   => '<ff ComicSansMS>',
                    'close'  => '</ff>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('Georgia'),
                    'icon'   => '/lib/plugins/fontfamily/images/Georgia.png',
                    'open'   => '<ff Georgia>',
                    'close'  => '</ff>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('Impact'),
                    'icon'   => '/lib/plugins/fontfamily/images/Impact.png',
                    'open'   => '<ff Impact>',
                    'close'  => '</ff>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('TimesNewRoman'),
                    'icon'   => '/lib/plugins/fontfamily/images/TimesNewRoman.png',
                    'open'   => '<ff TimesNewRoman>',
                    'close'  => '</ff>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('TrebuchetMS'),
                    'icon'   => '/lib/plugins/fontfamily/images/TrebuchetMS.png',
                    'open'   => '<ff TrebuchetMS>',
                    'close'  => '</ff>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('Verdana'),
                    'icon'   => '/lib/plugins/fontfamily/images/Verdana.png',
                    'open'   => '<ff Verdana>',
                    'close'  => '</ff>',
                ),
                array(
                    'type'   => 'format',
                    'title'  => $this->getLang('Webdings'),
                    'icon'   => '/lib/plugins/fontfamily/images/Webdings.png',
                    'open'   => '<ff Webdings>',
                    'close'  => '</ff>',
                ),
            )
        );
    }
}
