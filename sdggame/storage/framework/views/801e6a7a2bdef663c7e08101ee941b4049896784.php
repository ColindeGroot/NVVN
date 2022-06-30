
<link rel="stylesheet" href="<?php echo e(url('css/gendergelijkheid.css')); ?>" type="text/css"> 
    
        <div class="sdg-content wrapper">
            <div class="sdg-content-wrapper">
                <div class="sdg-textbox">
                    <div class="sdg-title" >5. Gendergelijkheid</div>
                    <div class="sub-title">Gelijke rechten voor mannen en vrouwen en empowerment van vrouwen en meisjes </div>
                    <div class="text" >
                        Gender zijn de kenmerken van een jongen of een meisje.
                        Dit is lichamelijk, maar ook sociaal, zoals dat
                        van jongens verwacht wordt dat ze sterk zijn en stoer doen
                        en van meisjes dat ze stil zijn en zorgen voor anderen. Gendergelijkheid betekent dat jongens en meisjes evenveel rechten hebben.
                        Er mag geen verschil zijn tussen wat een jongen krijgt of mag doen en wat een meisjes krijgt of mag doen.
                        Natuurlijk zijn er verschillen tussen jongens en meisjes, maar dit betekent niet dat de ene gender beter is dan de andere.
                    </div>
                </div>
                    
                <div class="sdg-imagebox">
                    <img class="sdg" src="<?php echo e(url('images/sdg5.svg')); ?>">
                </div>
            </div>
        </div>
        <div class="sdg-buttons wrapper">
            <a href="<?php echo route('home'); ?>"><div class="terug-button button" ><i class="fa-solid fa-circle-left"></i> Terug</div></a>
            <a href="#"><div class="start-button button" >Start challenge</div></a>
        </div>
<?php echo $__env->make('layouts.sdg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\colin\Documents\Mediacollege Amsterdam\Bewijzenmap\Leerjaar2\periode4\NVVN\sdggame\resources\views/gendergelijkheid.blade.php ENDPATH**/ ?>