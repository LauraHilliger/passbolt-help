<?php
// Page meta
$this->assign('rootclass', 'background');
$this->assign('section', 'press');
$this->assign('title', __('Press releases'));
$this->assign('subtitle', __('Passbolt official press releases'));

// Breadcrumbs
$crumbs = array('crumbs' => array(
    __('home') => Router::url('/'),
    __('about') => Router::url('/about'),
    __('press') => Router::url('/press')
));

// Javascript - see scriptbottom.ctp
$this->start('scriptbottom');
$scripts = ['bootstrap-scrollspy'];
foreach ($scripts as $s) echo $this->Html->script($s) . "\n";
$this->end();

// Content items
$content = '';
$this->set('releases', []);
$dir = APP . 'View' . DS . 'Elements' . DS . 'press' . DS;
$releases = array_diff(scandir($dir), array('..', '.'));
natsort($releases);
rsort($releases);
foreach($releases as $i => $r) {
    $this->element('press' . DS . substr($r, 0, -4));
}
$releases = $this->get('releases');
?>
<?php echo $this->element('header2'); ?>
<div class="panel main">
    <!-- in page navigation -->
    <div class="panel left">
        <div class="navigation wizard scrollspy" role="navigation">
            <ul class="nav">
                <li><h2>Press releases</h2></li>
                <?php foreach($releases as $r) :?>
                    <li><a href="#<?php echo $r['slug']; ?>"><?php echo $this->Time->format($r['created'], '%B %Y'); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div style="padding:1em;">
            <a href="<?php echo  Router::url('/press/releases.rss'); ?>" class="primary button">
                <i class="fa fa-rss fa-fw"></i><?php echo __('RSS feed'); ?></php>
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
