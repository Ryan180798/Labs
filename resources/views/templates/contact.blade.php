@if(!empty($contact))
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push ml-5">
                <div class="section-title left">
                    <h2>{{$contact->titre_contact}}</h2>
                </div>
                <p>{{$contact->sous_titre_contact}}</p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">{{$contact->info1_contact}}</p>
                <p class="con-item">{{$contact->info2_contact}}</p>
                <p class="con-item">{{$contact->info3_contact}}</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form action="{{route('message.store')}}" method="POST" role="form" class="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 m-2">
                            <input class="form-control" type="text" name="nom" placeholder="Your name">
                        </div>
                        <div class="col-sm-6 m-2">
                            <input class="form-control" type="text" name="email" placeholder="Your email">

                        </div>

                        {{-- <div class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                        @if (session('messages'))
                            <div class="text-success">
                                {{session('messages')}}
                            </div>
                        @endif --}}
                        <div class="col-sm-12">
                            <input class="form-control m-2" type="text" name="sujet" placeholder="Subject">

                            <textarea  class="form-control m-2" name="message" placeholder="Message"></textarea>
                            <button class="site-btn m-2">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@else


<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
                <p class="con-item">0034 37483 2445 322</p>
                <p class="con-item">hello@company.com</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form action="{{route('message.store')}}" method="POST" role="form" class="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 m-3">
                            <input class="form-control" type="text" name="nom" placeholder="Your name">
                        </div>
                        <div class="col-sm-6 m-3">
                            <input class="form-control" type="text" name="email" placeholder="Your email">

                        </div>

                        <div class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                        @if (session('messages'))
                            <div class="text-success">
                                {{session('messages')}}
                            </div>

                        @endif
                        </div>

                        <div class="col-sm-12 m-3">
                            <input class="form-control" type="text" name="sujet" placeholder="Subject">
                            
                            <textarea  class="form-control my-3"name="message" placeholder="Message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endif
<!-- Contact section end-->


