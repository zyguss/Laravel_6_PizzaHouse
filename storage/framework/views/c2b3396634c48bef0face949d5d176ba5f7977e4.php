

<?php $__env->startSection('content'); ?>
<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="/pizzas" method="POST">
        <?php echo csrf_field(); ?>

        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">

        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="havaiian">Havaiian</option>
            <option value="volcano">Volcano</option>
            <option value="veg supreme">Veg Supreme</option>
        </select>

        <label for="base">Choose pizza base:</label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin and crispy">thin and crispy</option>
            <option value="thick">thick</option>
        </select>

        <fieldset>
            <label>Extra toppings:</label> <br/>

            
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br/>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br/>
        </fieldset>

        <input type="submit" value="Order your pizza">

    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PizzaHouse\resources\views/pizzas/create.blade.php ENDPATH**/ ?>