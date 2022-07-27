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
    .myForm > label  {
        grid-column: labels;
        grid-row: auto;
    }
    .myForm > input,
    .myForm > textarea {
        grid-column: controls;
        grid-row: auto;
    }
    .myForm > button {
        grid-column: span 2;
    }
</style>
<form class="myForm">
    <label for="customer_name">Name </label>
    <input type="text" name="customer_name" id="customer_name" required>
    <label for="email_address">Email </label>
    <input type="email" name="email_address" id="email_address">
    <label for="comments">Comments</label>
    <textarea name="comments" id="comments" maxlength="500"></textarea>
    <button>Submit</button>
</form>