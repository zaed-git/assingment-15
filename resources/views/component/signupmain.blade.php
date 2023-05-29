<!-- contact section start -->
<div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_main">
               <h1 class="request_text">Registration Section</h1>
               <form action="/register " method="POST">
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
                     <input type="text" class="email-bt" placeholder="email" name="email" value="{{ old('email') }}">
                  <!--  -->
                  @error('email')
                  <h2 class="text-danger">{{ $message }}</h2>
            @enderror
                  <!--  -->
                  
                    </div>
                  
                  <<div class="form-group">
                     <input type="password" class="email-bt" placeholder="password" name="pass" value="{{ old('pass') }}">
                  <!--  -->
                  @error('pass')
                  <h2 class="text-danger">{{ $message }}</h2>
            @enderror
                  <!--  -->
                  
                    </div>
                  <button type="submit" class="btn btn-primary mt-3">SUBMIT</button>
               </form>
               @if ($message = Session::get('success'))
        

                        <h3>  {{ $message }}</h3>
                @endif
               <!-- <div class="send_btn"><a href="#">SEND</a></div> -->
            </div>
         </div>
      </div>
      <!-- contact section end -->