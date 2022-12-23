@extends('master')
@section('content')
<div class="container">
    <table class="table">
        <tbody>
          <tr>
            <td>Amount</td>
            <td>$ {{$total}}</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>$ 0</td>
          </tr>
          <tr>
            <td>Delivery</td>
            <td>$ 10</td>
          </tr>
          <tr>
            <td>Total Amount</td>
            <td>$ {{$total + 10}}</td>
          </tr>
        </tbody>
      </table>
      <form action="/orderplace" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
            <textarea class="form-control" name="address" id="exampleFormControlTextarea1"placeholder="Enter your address"  rows="3"></textarea>
        </div>
        <label for="exampleFormControlTextarea1" class="form-label fw-bold" >Payment Method</label>
        <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="payment" id="inlineRadio1" value="cash">
            <label class="form-check-label" for="inlineRadio1">online payment</label>
          </div>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="payment" id="inlineRadio2" value="cash">
            <label class="form-check-label" for="inlineRadio2">erm payment</label>
          </div>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="payment" id="inlineRadio3" value="cash" >
            <label class="form-check-label" for="inlineRadio3">bank payment</label>
          </div>
        <br><br>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
</div>
@endsection