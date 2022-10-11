
<h1>Cake Order Form</h1>

<form action='cakeorder.php'>

 <div>   
 <p> Choose your cake size:  
<input type='radio' name='size' id='small'>
<label for='red'>Small (6")</label>

<input type='radio' name='size' id='medium'>
<label for='orange'>Medium (8")</label>

<input type='radio' name='size' id='large'>
<label for='yellow'>Large (12")</label></p>
</div>


    <div>
        <p>You can place two lines of text.
        <label for='writing1'>Line 1</label>
        <input type='text' id='line1'>
        <label for='writing2'>Line 2</label>
        <input type='text' id='line2'></p>
    </div> 

    <div>
        <label for='flavor'>Choose cake flavor</label>
        <select id='flavor'>
            <option>Choose one...</option>
            <option>Chocolate</option>
            <option>Red Velvet</option>
            <option>Vanilla</option>
            <option>Marble chocolate and vanilla</option>
            <option>Unicorn rainbow layers</option>
        </select></p>
    </div>

    <div>
        <label for='icing'>Choose icing color/flavor</label>
        <select id='icing'>
            <option>Choose one...</option>
            <option>Chocolate buttercream</option>
            <option>White Chocolate buttercream</option>
            <option>Vanilla buttercream</option>
            <option>Lemon buttercream/yellow/</option>
            <option>Blue buttercream/vanilla</option>
            <option>Pink buttercream/strawberry</option>
        </select>
    </div>

    <div class='addExtras'>
        <p>Would you like to add any of these extras?
        <input type='checkbox' id='extras'>
        <label for='coolBox'>Insulated box</label>
        <input type='checkbox' id='extras'>
        <label for='candles'>Candles</label>
        <input type='checkbox' id='extras'>
        <label for='platter'>Glass serving platter</label>
        <input type='checkbox' id='extras'>
        <label for='tableware'>Compostable plates and forks</label></p>
    </div>

    <div>
        <label for='instruct'>Special Instructions</label>
        <textarea id='instruct'></textarea>
    </div>

    <button type='submit'>Submit your Order</button>
</form>