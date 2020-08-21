@component('mail::message')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <main>
                <section class="d-flex flex-row">
                    <section class="flex-column p-2">
                        <div class="form-group">
                            <label>Nombre</label>
                            <h3 class="form-control">{{$data ['contact_name']}}</h3>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <h3 class="form-control">{{$data ['contact_email']}}</h3>
                        </div>
                        <div class="form-group">
                        <label>Mensaje</label>
                            <p class="form-control">{{$data ['contact_message']}}</p>
                        </div>
                    </section>
                </section> 
            </main>
        </div>
    </div>
</div>

@endcomponent
