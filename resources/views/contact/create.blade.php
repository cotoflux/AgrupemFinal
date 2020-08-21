@extends('layouts.app')

@section('content') 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <main>
                <section id="contact_form_information" class="d-flex justify-content-around align-items-center">
                    <div class="flex-column col-md-10 col-lg-7">
                    <form action="/contact" method="post">
                        @csrf
                        <section id="contactForm" class="p-2">
                            <div class="form-group">
                                <input id="contact_name" type="text" placeholder="@lang('contact.name')" name="contact_name" value="{{old('contact_name')}}" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <input id="contact_email" type="email" placeholder="Email"name="contact_email" value="{{old('contact_email')}}" class="form-control" required></input>
                            </div>
                            <div id="contact_textarea_container" class="form-group">
                                <textarea id="contact_textarea" id="contact_message" placeholder="@lang('contact.message')" name="contact_message" cols="30" rows="10" class="form-control" required>{{old('contact_message')}}</textarea>
                            </div>
                            <div class="right_buttons">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </section>
                    </form>
                    </div>

                    <div id="contact_information_container" class="flex-column col-lg-5 col-md-10 mt-4">
                    <section>
                        <ul id="contact_information">
                            <div>
                                <article>
                                    <li>
                                        <header>
                                            <h3>@lang('layout.direccion'):</h3>
                                        </header>
                                        <p>ALTHAIA (xarxa assistencial de Manresa)</p>
                                        <p>CENTRE HOSPITALARI DE MANRESA</p>
                                        <p>C/ Flor de Lis, 33, 08242 MANRESA</p>
                                    </li>
                                </article>
                            </div>
                            <div>
                                <article>
                                    <li>
                                        <header>
                                            <h3>@lang('layout.tele'):</h3>
                                        </header>
                                        <p>93 875 93 00 + ext.1065 @lang('layout.horarioAtencion')</p>
                                        <p>661 713 162 (Marta)</p>
                                    </li>
                                </article>
                                <article>
                                    <li>
                                        <header>
                                            <h3>@lang('layout.mail'):</h3>
                                        </header>
                                        <p>grupdesuport.em@gmail.com</p>
                                    </li>
                                </article>
                            </div>  
                        </ul>
                    </section>
                    </div>
                </section> 
                <section id="contact_map" class="d-flex justify-content-around">
                    <div id="map"></div>
                </section>
                  
            </main>
        </div>
    </div>
    
</div>

@endsection