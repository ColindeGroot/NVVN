
    <link rel="stylesheet" href="<?php echo e(url('css/geenhonger.css')); ?>" type="text/css"> 
        
    <div class="sdg-content wrapper">
        <div class="sdg-content-wrapper">
            <div class="sdg-textbox">
                <div class="sdg-title" >2. Geen honger</div>
                <div class="sub-title">Einde aan honger, zorgen voor voedselzekerheid en duurzame landbouw</div>
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
                <img class="sdg" src="<?php echo e(url('images/sdg2.svg')); ?>">
            </div>
        </div>
    </div>
    <div class="sdg-buttons wrapper">
    <button class="terug-button button" onclick="window.history.go(-1);"><i class="fa-solid fa-circle-left"></i> Terug</button>
        <a href="#"><div class="start-button button" >Start challenge</div></a>
    </div>
<?php echo $__env->make('layouts.sdg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\colin\Documents\Mediacollege Amsterdam\Bewijzenmap\Leerjaar2\periode4\NVVN\sdggame\resources\views/geenhonger.blade.php ENDPATH**/ ?>