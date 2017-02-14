<div class="row">
    <div class="col-md-12">
        <h1>Your card</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th width="10%">

                </th>
                <th>
                    Pizza
                </th>
                <th>
                    Bottom
                </th>
                <th>
                    Size
                </th>
                <th>
                    Sauce
                </th>
                <th>
                    Amount
                </th>
                <th>
                    Price per piza
                </th>
                <th>
                    Combined price
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($card as $id => $order) {
                ?>
                <tr>
                    <td>
                        <form action="?controller=card&action=delete" method="post">
                            <input type="hidden" name="id" value="<?= $id ?>"/>
                            <button class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                    <td><?= $order['pizza'] ?></td>
                    <td><?= $order['bottom'] ?></td>
                    <td><?= $order['size'] ?></td>
                    <td><?= $order['composition'] ?></td>
                    <td><?= $order['amount'] ?></td>
                    <td><?= '&euro;' . number_format($order['price'], 2) ?></td>
                    <td><?= '&euro;' . number_format($order['price'] * $order['amount'], 2) ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
            <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><b>&euro;<?= number_format(\App\Models\Card::getTotalPrice(), 2) ?></b></td>
            </tr>
            </tfoot>
        </table>
        <form action="?controller=card&action=pay" method="post">
            <input type="submit" class="btn btn-lg btn-warning" value="Pay"/>
        </form>
    </div>
</div>