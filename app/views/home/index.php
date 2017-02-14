<div class="row">
    <div class="col-md-6">
        <h1>
            Welcome!
        </h1>
        <form action="?controller=card&action=add" method="post">
            <input type="hidden" name="referrer" value="home"/>
            <label>
                Choose your pizza
            </label>
            <?php
            foreach ($params['pizzas'] as $key => $pizza) {
                echo '<input type="hidden" value="' . $pizza['price'] . '" name="price"/>';
                ?>
                <div class="radio">
                    <label>
                        <input type="radio" name="pizza" value="<?= $pizza['name'] ?>" <?= $key === 0 ? 'checked' : '' //key = 0 is first item, so I want it checked        ?>>
                        <img src="assets/products/<?= $pizza['id'] ?>.png" class="pizza"/>

                        <?= $pizza['name'] ?>
                        <small>(&euro;<?= number_format($pizza['price'], 2) ?>)</small>
                    </label>
                </div>
                <?php
            }
            ?>
            <div class="form-group">
                <label for="size">Choose your size:</label>
                <select name="size" id="size" class="form-control">
                    <?php
                    foreach ($sizes as $size) {
                        echo '<option value="' . $size['name'] . '">' . $size['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="bottom">Choose your bottom:</label>
                <select name="bottom" id="bottom" class="form-control">
                    <?php
                    foreach ($bottoms as $bottom) {
                        echo '<option value="' . $bottom['name'] . '">' . $bottom['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="composition">Choose your sauce:</label>
                <select name="composition" id="composition" class="form-control">
                    <?php
                    foreach ($compositions as $composition) {
                        echo '<option value="' . $composition['name'] . '">' . $composition['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">How many pizzas:</label>
                <select name="amount" id="amount" class="form-control">
                    <?php
                    for ($amount = 1; $amount <= 5; $amount++) {
                        echo '<option value="' . $amount . '">' . $amount . '</option>';

                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-block btn-success">Add to card</button>
        </form>
    </div>
    <div class="col-md-3 col-md-offset-3">
        <div class="card">
            <h2>Your card</h2>
        </div>
    </div>
</div>