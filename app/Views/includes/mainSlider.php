<!-- Slider -->
<div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev-slider2" class="rev_slider fullwidthabanner">
        <ul>
            <!-- Slide -->
            <?php foreach ($sliders as $slider): ?>
                <li data-transition="parallaxvertical">
                <!-- Main Image -->
                <img src="<?= $slider['path'] ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina>
                <!-- Layers -->
                <div class="sfb tp-caption tp-resizeme text-white font-family-heading text-shadow text-center font-weight-500"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                     data-fontsize="['58','54','50','46']"
                     data-lineheight="['68','64','60','56']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                     data-start="1500"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on">
                    <?= $slider['title'] ?>
                </div>
                <div class="sfb tp-caption tp-resizeme text-grey text-shadow text-center letter-spacing-1px"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['-14','-14','-14','-14']"
                     data-fontsize="['20','20','20','18']"
                     data-lineheight="['30','30','30','28']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                     data-start="1800"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     data-lasttriggerstate="reset">
                    <?= $slider['short_description'] ?>
                </div>
                <div class="sfb tp-caption"
                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                     data-y="['middle','middle','middle','middle']" data-voffset="['83','83','83','83']"
                     data-width="none"
                     data-height="none"
                     data-whitespace="nowrap"
                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                     data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                     data-transform_idle="o:1;"
                     data-transform_in="o:0"
                     data-transform_out="o:0"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="2100"
                     data-splitin="none"
                     data-splitout="none"
                     data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                     data-responsive="on">
                    <a href="<?= $slider['url'] ?>" class="wprt-button rounded-3px">GET A QUOTE</a>
                </div>
            </li>
            <?php endforeach; ?>
            <!-- End Slide -->
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>