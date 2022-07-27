<!doctype html>
<title>Example</title>
<style>
    .myForm {
        display: grid;
        grid-template-columns: [labels] auto [controls] 1fr;
        grid-auto-flow: row;
        grid-gap: .8em;
        background: beige;
        padding: 1.2em;
    }
    .myForm > label,
    .myForm > fieldset  {
        grid-column: labels;
        grid-row: auto;
    }
    .myForm > input,
    .myForm > select,
    .myForm > textarea {
        grid-column: controls;
        grid-row: auto;
        padding: .4em;
        border: 0;
    }
    .myForm > fieldset,
    .myForm > button {
        grid-column: span 2;
    }
    .myForm > button {
        padding: 1em;
        background: darkkhaki;
        border: 0;
        color: white;
    }
</style>
<form class="myForm">
    <label for="customer_name">Name </label>
    <input type="text" name="customer_name" id="customer_name" required>
    <label for="phone_number">Phone </label>
    <input type="tel" name="phone_number" id="phone_number">
    <label for="email_address">Email </label>
    <input type="email" name="email_address" id="email_address">
    <fieldset>
        <legend>Which taxi do you require?</legend>
        <label> <input type="radio" name="taxi" id="taxi_car" required value="car"> Car </label>
        <label> <input type="radio" name="taxi" id="taxi_van" required value="van"> Van </label>
        <label> <input type="radio" name="taxi" id="taxi_tuk" required value="tuktuk"> Tuk Tuk </label>
    </fieldset>
    <fieldset>
        <legend>Extras</legend>
        <label> <input type="checkbox" name="extras" id="extras_baby" value="baby"> Baby Seat </label>
        <label> <input type="checkbox" name="extras" id="extras_wheel" value="wheelchair"> Wheelchair Access </label>
        <label> <input type="checkbox" name="extras" id="extras_tip" value="tip"> Stock Tip </label>
    </fieldset>
    <label for="pickup_time">Pickup Date/Time</label>
    <input type="datetime-local" name="pickup_time" id="pickup_time" required>
    <label for="pickup_place">Pickup Place</label>
    <select name="pickup_place" id="pickup_place">
        <option value="" selected="selected">Select One</option>
        <option value="office" >Taxi Office</option>
        <option value="town_hall" >Town Hall</option>
        <option value="telepathy" >We'll Guess!</option>
    </select>
    <label for="dropoff_place">Dropoff Place</label>
    <input type="text" name="dropoff_place" id="dropoff_place" required list="destinations">
    <datalist id="destinations">
        <option value="Airport">
        <option value="Beach">
        <option value="Fred Flinstone's House">
    </datalist>
    <label for="comments">Special Instructions</label>
    <textarea name="comments" id="comments" maxlength="500"></textarea>
    <button>Submit Booking</button>
</form>