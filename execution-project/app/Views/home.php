<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <!-- Background image -->
      <div class="p-0 text-center bg-image" style="
          background-image: url('heroImage.jpg');
          height: 400px;
          margin-top: 58px;
        ">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); height: 400px; margin-top: 58px;">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Milk It Ice Cream Shop</h1>
              <h4 class="mb-3">We Serve Special Ice Cream For Your Day!</h4>
              <a class="btn btn-outline-light btn-lg" href="#!" role="button">Get Started</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Background image -->

        <h1 style="text-align: center; margin: 20px;">Our Popular Ice Cream Menu</h1>

        <div class="gallery">
            <div class="card">
                <img class="card-img-top" src="https://i.pinimg.com/564x/31/19/8b/31198ba8f5f69caefea843d7b1df26cb.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Chocochips Ice Cream</h5>
                    <p class="card-text">Rasa : chocolate <br>Topping : kacang <br>Harga : 28.000</p>
                    <a href="/order" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="https://i.pinimg.com/564x/38/fa/a7/38faa79da61aedd94d64aa59b569035d.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Snow Oreo Ice Cream</h5>
                    <p class="card-text">Rasa : vanilla <br>Topping : oreo <br>Harga : 17.000</p>
                    <a href="/order" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="https://i.pinimg.com/564x/44/06/99/440699bc1546d7997bb5010a9eaaf319.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Choco-Mocca Ice Cream</h5>
                    <p class="card-text">Rasa : mocca <br>Topping : cokelat <br>Harga : 21.000</p>
                    <a href="/order" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="https://i.pinimg.com/564x/3f/04/1c/3f041c07389b6fcc9a2f4a2e5c551ea1.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Sweet Corn Ice Cream</h5>
                    <p class="card-text">Rasa : jagung <br>Topping : kacang <br>Harga : 25.000</p>
                    <a href="/order" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="https://i.pinimg.com/564x/01/8c/0e/018c0e78ca4d7169532a356d9544c608.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Sweet Vanilla Ice Cream</h5>
                    <p class="card-text">Rasa : vanilla <br>Topping : kismis <br>Harga : 32.000</p>
                    <a href="/order" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="https://i.pinimg.com/564x/9d/84/39/9d8439426af011775986f727e77ae5ba.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Biscuit Ice Cream</h5>
                    <p class="card-text">Rasa : vanilla <br>Topping : cokelat <br>Harga : 18.000</p>
                    <a href="/order" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="https://i.pinimg.com/564x/08/a2/5a/08a25a637c5bab7c1da8440e985dd9a5.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Wealth Chocolate Ice Cream</h5>
                    <p class="card-text">Rasa : chocolate <br>Topping : cokelat <br>Harga : 27.000</p>
                    <a href="/order" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="https://i.pinimg.com/564x/9e/82/29/9e82299b0b6f0f79ec3289f72f8a870d.jpg" alt="Card image cap">
                <div class="card-body">
                  <div class="text-white">
                    <h5 class="card-title">Sweet Cutton Ice Cream</h5>
                    <p class="card-text">Rasa : vanilla <br>Topping : susu <br>Harga : 15.000</p>
                    <a href="/order" class="btn btn-light">Add to chart</a>
                  </div>
                </div>
            </div>
        </div>
        </div>
  </div>
</div>
<?= $this->endSection();?>