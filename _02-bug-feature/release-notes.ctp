<?php
// Page meta
$this->assign('rootclass', 'background');
$this->assign('section', 'release');
$this->assign('title', __('Release notes'));
$this->assign('subtitle', __('Passbolt release notes, find out what\'s new.'));

// Breadcrumbs
$crumbs = array('crumbs' => array(
    __('home') => Router::url('/'),
    __('release notes') => Router::url('/release/notes')
));

$this->start('css');
echo $this->Html->css('prism');
$this->end();

// Javascript - see scriptbottom.ctp
$this->start('scriptbottom');
echo $this->Html->script('prism');
$this->end();

// Javascript - see scriptbottom.ctp
$this->start('scriptbottom');
    $scripts = ['bootstrap-scrollspy'];
    foreach ($scripts as $s) echo $this->Html->script($s) . "\n";
$this->end();

// Content items
$content = '';
$this->set('releases', []);
$dir = APP . 'View' . DS . 'Elements' . DS . 'release' . DS;
$releases = array_diff(scandir($dir), array('..', '.'));
natsort($releases);
$releases = (array_values(array_reverse($releases)));
foreach($releases as $i => $r) {
    $this->element('release' . DS . substr($r, 0, -4));
}
$releases = $this->get('releases');
?>
<?php echo $this->element('header2'); ?>
<div class="panel main " >
    <!-- in page navigation -->
    <div class="panel left">
        <div class="navigation wizard scrollspy" role="navigation">
            <ul class="nav">
                <li><h2>Last releases</h2></li>
<?php $i=0; foreach($releases as $r) : if($i++ > 5) break; ?>
                <li><a href="#<?php echo $r['slug']; ?>"><?php echo $r['number']; ?></a></li>
<?php endforeach; ?>
                <li><a href="#<?php echo $r['slug']; ?>">& more</a></li>
            </ul>
        </div>
        <div style="padding:1em;">
            <a href="<?php echo  Router::url('/release/notes.rss'); ?>" class="primary button">
                <i class="fa fa-rss fa-fw"></i><?php echo __('RSS feed'); ?>
            </a>
        </div>
    </div>
    <!-- main -->
    <div class="panel middle" data-spy="scroll" data-target=".scrollspy">
        <div class="grid grid-responsive-12" >
            <article>
                <div class="row">
                    <div class="col12">
<?php echo $this->element('breadcrumbs', $crumbs);?>
                    </div>
                </div>
<?php echo $this->fetch('article'); ?>
            </article>
        </div>
    </div>
</div>
