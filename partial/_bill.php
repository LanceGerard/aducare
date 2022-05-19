<?php
    
?>

<!-- donation form -->
            <form class="mx-auto border rounded-3" id="donationForm" name="donationForm" action="../AdUCare/money.php" method="POST" style="width: 40vw; padding: 4vh 8vh;">
                <p class="mb-5 text-center">Please fill up this billing form.</p>
                <!-- name txtbox -->
                <div class="mb-4">
                    <div class="form-floating">
                        <input class="form-control" placeholder="Name" type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
                        <label for="name">Name</label>
                    </div>
                    <div class="text-danger"><?php echo $errors['name']; ?></div>
                </div>
                <!-- address txtbox -->
                <div class="mb-4">
                    <div class="form-floating">
                        <input class="form-control" placeholder="Billing Address" type="text" name="address" value="<?php echo htmlspecialchars($address); ?>">
                        <label for="address">Billing Address</label>
                    </div>
                    <div class="text-danger"><?php echo $errors['address']; ?></div>
                </div>
                <!-- acct# txtbox -->
                <div class="mb-4">
                    <div class="form-floating">
                        <input class="form-control" placeholder="12-digit Account Number" type="text" name="acct" value="<?php echo htmlspecialchars($acct); ?>">
                        <label for="acct">12-digit Account Number</label>
                    </div>
                    <?php foreach ($errors['acct'] as $acctErr) { ?>
                    <div class="text-danger"><?php echo $acctErr; ?></div>
                    <?php } ?>
                </div>
                <!-- donation txtbox -->
                <div class="input-group">
                    <span class="input-group-text">PHP</span>
                    <input type="number" min="1" step="any" class="form-control" placeholder="Min. donation of PHP100" id="min-donation" name="money" value="<?php echo htmlspecialchars($money); ?>">
                </div>
                <div class="mb-4 text-danger"><?php echo $errors['money']; ?></div>
                <!-- submit btn -->
                <div class="mb-4 row">
                    <div class="d-grid mb-3">
                    <input class="btn btn-primary" type="submit" name="submit" value="Complete">
                    </div>
                </div>
            </form>