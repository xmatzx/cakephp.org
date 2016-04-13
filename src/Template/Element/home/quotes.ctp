<?php
use Cake\Core\Configure;
$quotes = Configure::read('Site.quotes');
?>
<section id="quote" class="pt-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="title-red"><?= __('Hear what others have to say.')?></h3>
                <h4 class="subtitle-black"><?= __('This is how CakePHP has helped others to succeed.')?></h4>
            </div>
			<?php foreach($quotes as $quote): ?>
            <div class="col-md-6 mb90">
                <div class="col-md-10 col-md-offset-1">
                    <div class="quote">
                        <?= $this->Html->image($quote['image'])?>
                        <?= $this->Html->tag('blockquote', $quote['text'])?>
                        <?= $this->Html->tag('h5', $quote['client'])?>
                        <?= $this->Html->tag('h6', $quote['company'])?>
                    </div>
                </div>
            </div>
			<?php endforeach;?>
        </div>
    </div>
</section>
