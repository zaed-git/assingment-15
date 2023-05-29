<!-- contact section start -->
<div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_main">
               <h1 class="request_text">A Call Back</h1>
               <form action="/sendmail" method="POST">
               @csrf
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="name" value="{{ old('name') }}">
                  
                  <!--  -->
                  @error('name')
                  <h2 class="text-danger">{{ $message }}</h2>
            @enderror
                  <!--  -->
                    </div>
                  
            <!--  -->
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Email" name="email" value="{{ old('email') }}">
                  <!--  -->
                  @error('email')
                  <h2 class="text-danger">{{ $message }}</h2>
            @enderror
                  <!--  -->
                  
                    </div>
                  
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message">

                     {{ old('message') }}
                     </textarea>
                     @error('message')
                     <h2 class="text-danger">{{ $message }}</h2>
            @enderror

                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Send Message</button>
               </form>
               @if ($message = Session::get('success'))
        

                        <h3>  {{ $message }}</h3>
                @endif
               <!-- <div class="send_btn"><a href="#">SEND</a></div> -->
            </div>
         </div>
      </div>
      <!-- contact section end -->