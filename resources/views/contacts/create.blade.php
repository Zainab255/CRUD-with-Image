

 <h1>CONTACT US</h1>
    <form action="{{route('contacts.store')}}" class="contact_form">
        <h3 style= " margin: 1% 0% 8%  4%; padding: 20px;"><b style="background-color: black; color: yellow;">YOUR MESSAGE TO: Hotel Lahore</b></h3>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <label for="title" class="form-label">  Title</label><br>
              <select id="title" name='title' class="form-select" class="form-control" class="form-control" style="border-top: none; border-left: none;border-right: none;" >
                <option>Mrs.</option>
                <option>Mis.</option>
                <option>Mr.</option>
               </select><br>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <label for="first_name" class="form-label">First Name</label><br>
                <input type="text" class="form-control" id="first_name" name="first_name"style="border-top: none; border-left: none;border-right: none;"><br>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <label for="last_name" class="form-label">Last Name</label><br>
                <input type="text" class="form-control" id="last_name" name="last_name"  style="border-top: none; border-left: none;border-right: none;"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="Email" class="form-label">Email</label><br>
                <input type="email" class="form-control" id="Email" name="email" style="border-top: none; border-left: none;border-right: none;"><br>
            </div>
            <div class="col-md-6">
                <label for="phone"  class="form-label">Phone NO</label><br>
                <input type="tel" class="form-control" name="phone" id="phone" style="border-top: none; border-left: none;border-right: none;"><br>
            </div>
        </div>
        <label for="destination"  class="form-label">Destination</label><br>
        <input type="text" class="form-control" name="destination" id="destination" style="border-top: none; border-left: none;border-right: none;"><br>
        <label for="opinion" class="form-label">HOW CAN WE HELP YOU?</label><br>
        <input type="text" class="form-control" name="opinion" id="opinion" style="height: 20ch;width: 50ch;border-radius: 5ch;"><br>
        <button type="submit" class="contact_button">Submit</button><br>
    </form>

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <img src="{{asset('pic/weddig2.jp')}}g" alt="" height="500px" width="600px">
        </div>
        <div class="col-6" style="text-align: center; padding-top: 15ch;">
          <h1>WEDDINGS & CELEBRATIONS</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis repudiandae
            , dignissimos aut magnam itaque nemo deserunt quis amet corrupti fuga! A 
            reprehenderit eligendi excepturi odio.</p>
            <h5>WEDDINGS / EVENTS</h5>
            <h6>T: +92 (21) 111 505 505 /F: +92 (21) 3568-1835, 3568-2655</h6>
                <h6>E: pchk@lahorehotels.com /W: pchotels.com /FB: www.facebook.com/HotelLahore/</h6>
        </div>
    </div>
</div>
