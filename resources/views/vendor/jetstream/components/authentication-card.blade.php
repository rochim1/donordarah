<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-sm-12 col-md-8 col-lg-5 my-4">
            <div>
                {{ $logo }}
            </div>

            <div class="card shadow-sm px-1 mx-4">
                {{ $slot }}
            </div>

           <x-fslogin 
           facebook="/auth/facebook/redirect" 
           github="/auth/github/redirect" 
           google="/auth/google/redirect" 
           twitter="/auth/twitter/redirect" 
           />

        </div>
    </div>
</div>