<?php $__env->startSection('content'); ?>
  <template>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                    <div class="card-header text-white bg-dark"><i class="fas fa-notes-medical"></i> Citas Medicas V1.0.0</div>
                    <!-- acceder al home -->
                    <?php if(auth()->check() && auth()->user()->hasAnyRole('doctor')): ?>
                    <citas-component></citas-component>
                    <?php endif; ?>
                    <!-- acceder al objeto ver doctores -->
                    <?php if(auth()->check() && auth()->user()->hasRole('recepcion')): ?>
                    <verdoctores-component></verdoctores-component>
                    <?php endif; ?>
                  </div>
              </div>
          </div>
      </div>
  </template>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/app-odonto.app/app-odonto.app/resources/views/home.blade.php ENDPATH**/ ?>