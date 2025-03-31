<div class="card p-3 mb-3">
    <h4>14) PC SELECTIONS</h4>
    <h5 class="font-weight-bold mb-2">14.1 Kitchen</h5>

    <div class="form-group row">
        <div class="col-sm-12">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kitchen_selection_method" id="kitchen_selection_below" value="below" checked>
                <label class="form-check-label" for="kitchen_selection_below">Per Selections Below</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kitchen_selection_method" id="kitchen_quote_attached" value="quote">
                <label class="form-check-label" for="kitchen_quote_attached">Quote Attached</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="kitchen_na" id="kitchen_na" value="na">
                <label class="form-check-label" for="kitchen_na">N/A</label>
            </div>
        </div>
    </div>

    <div class="font-weight-bold mb-2">KITCHEN</div>
    <div class="custom-resp-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Brand</th>
                    <th>Model / Style</th>
                    <th>Supplier</th>
                    <th>Colour</th>
                    <th>$ or Qty</th>
                    <th colspan="3" class="text-center">( Tick One )</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="text-center">By Builder</th>
                    <th class="text-center">By Owner</th>
                    <th class="text-center">N /A</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table Rows -->
                <tr>
                    <th scope="row">Oven</th>
                    <td><input type="text" class="form-control form-control-sm" name="oven_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_qty"></td>
                    <td class="text-center"><input type="radio" name="oven_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="oven_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="oven_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Cook top</th>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_qty"></td>
                    <td class="text-center"><input type="radio" name="cooktop_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="cooktop_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="cooktop_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Range hood</th>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_qty"></td>
                    <td class="text-center"><input type="radio" name="rangehood_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="rangehood_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="rangehood_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Dishwasher</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="form-check mt-3">
        <input class="form-check-input" type="checkbox" name="kitchen_manufacturer_supply" id="kitchen_manufacturer_supply" value="manufacturer">
        <label class="form-check-label" for="kitchen_manufacturer_supply">To be selected & supplied with Kitchen Manufacturer.</label>
    </div>

    <div class="alert alert-info mt-3" role="alert">
        If "By Owner" then ensure Technical Data Sheets are provided to the kitchen.
    </div>

    <div class="form-group mt-3">
        <label for="kitchen_notes">Notes to above:</label>
        <textarea class="form-control" id="kitchen_notes" name="kitchen_notes" rows="5"></textarea>
    </div>
</div>


<div class="card p-3 mb-3">
    <h5>14.2 Wet Areas</h5>
    <div class="mb-3">
        <input type="checkbox"> Per Selections Below
        <input type="checkbox"> Quote Attached
        <input type="checkbox"> N/A
    </div>

    <div class="custom-resp-table">
        <h5 class="text-center bg-light p-2">LAUNDRY</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Brand</th>
                    <th>Model / Style</th>
                    <th>Supplier</th>
                    <th>Colour</th>
                    <th>$ or Qty</th>
                    <th colspan="3" class="text-center">( Tick One )</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="text-center">By Builder</th>
                    <th class="text-center">By Owner</th>
                    <th class="text-center">N /A</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table Rows -->
                <tr>
                    <th scope="row">Floor grate</th>
                    <td><input type="text" class="form-control form-control-sm" name="oven_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_qty"></td>
                    <td class="text-center"><input type="radio" name="oven_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="oven_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="oven_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Tub</th>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_qty"></td>
                    <td class="text-center"><input type="radio" name="cooktop_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="cooktop_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="cooktop_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Tub taps</th>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_qty"></td>
                    <td class="text-center"><input type="radio" name="rangehood_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="rangehood_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="rangehood_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Tub plug & waste</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Washing m/c cocks</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
            </tbody>
        </table>
        <div>
            <input type="checkbox"> Laundry combination to be selected & supplied with kitchen manufacturer
        </div>
    </div>

    <div class="custom-resp-table mt-4">
        <h5 class="text-center bg-light p-2">BATHROOM</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Brand</th>
                    <th>Model / Style</th>
                    <th>Supplier</th>
                    <th>Colour</th>
                    <th>$ or Qty</th>
                    <th colspan="3" class="text-center">( Tick One )</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="text-center">By Builder</th>
                    <th class="text-center">By Owner</th>
                    <th class="text-center">N /A</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table Rows -->
                <tr>
                    <th scope="row">Toilet & Cisterm</th>
                    <td><input type="text" class="form-control form-control-sm" name="oven_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_qty"></td>
                    <td class="text-center"><input type="radio" name="oven_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="oven_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="oven_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Toilet roll holder</th>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_qty"></td>
                    <td class="text-center"><input type="radio" name="cooktop_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="cooktop_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="cooktop_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Bath</th>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_qty"></td>
                    <td class="text-center"><input type="radio" name="rangehood_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="rangehood_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="rangehood_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Bath taps</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Bath plug & waste</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Bath soap holder</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Vanity</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Vanity taps</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Vanity plug & waste</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Shower screen</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Shower rose</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Shower taps</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Shower soap holder</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Floor grate</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Hand towel ring</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Towel rail</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Mirror</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>





<div class="card p-3 mb-3">
    <h5>14.2 Wet Areas</h5>

    <div class="custom-resp-table">
        <h5 class="text-center bg-light p-2">ENSUITE</h5>
        <div class="custom-resp-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>Brand</th>
                        <th>Model / Style</th>
                        <th>Supplier</th>
                        <th>Colour</th>
                        <th>$ or Qty</th>
                        <th colspan="3" class="text-center">( Tick One )</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="text-center">By Builder</th>
                        <th class="text-center">By Owner</th>
                        <th class="text-center">N /A</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table Rows -->
                    <tr>
                        <th scope="row">Toilet & Cisterm</th>
                        <td><input type="text" class="form-control form-control-sm" name="oven_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="oven_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="oven_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="oven_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="oven_qty"></td>
                        <td class="text-center"><input type="radio" name="oven_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="oven_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="oven_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Toilet roll holder</th>
                        <td><input type="text" class="form-control form-control-sm" name="cooktop_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="cooktop_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="cooktop_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="cooktop_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="cooktop_qty"></td>
                        <td class="text-center"><input type="radio" name="cooktop_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="cooktop_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="cooktop_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Bath</th>
                        <td><input type="text" class="form-control form-control-sm" name="rangehood_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="rangehood_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="rangehood_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="rangehood_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="rangehood_qty"></td>
                        <td class="text-center"><input type="radio" name="rangehood_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="rangehood_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="rangehood_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Bath taps</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Bath plug & waste</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Bath soap holder</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Vanity</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Vanity taps</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Vanity plug & waste</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Shower screen</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Shower rose</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Shower taps</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Shower soap holder</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Floor grate</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Hand towel ring</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Towel rail</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Mirror</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <input type="checkbox"> Laundry combination to be selected & supplied with kitchen manufacturer
        </div>
    </div>

    <div class="custom-resp-table mt-4">
        <h5 class="text-center bg-light p-2">POWDER</h5>
        <div class="custom-resp-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>Brand</th>
                        <th>Model / Style</th>
                        <th>Supplier</th>
                        <th>Colour</th>
                        <th>$ or Qty</th>
                        <th colspan="3" class="text-center">( Tick One )</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="text-center">By Builder</th>
                        <th class="text-center">By Owner</th>
                        <th class="text-center">N /A</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table Rows -->
                    <tr>
                        <th scope="row">Toilet & Cistern</th>
                        <td><input type="text" class="form-control form-control-sm" name="oven_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="oven_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="oven_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="oven_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="oven_qty"></td>
                        <td class="text-center"><input type="radio" name="oven_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="oven_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="oven_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Toilet roll holder</th>
                        <td><input type="text" class="form-control form-control-sm" name="cooktop_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="cooktop_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="cooktop_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="cooktop_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="cooktop_qty"></td>
                        <td class="text-center"><input type="radio" name="cooktop_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="cooktop_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="cooktop_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Vanity</th>
                        <td><input type="text" class="form-control form-control-sm" name="rangehood_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="rangehood_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="rangehood_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="rangehood_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="rangehood_qty"></td>
                        <td class="text-center"><input type="radio" name="rangehood_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="rangehood_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="rangehood_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Vanity taps</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Vanity plug & waste</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Shower screen</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Shower rose</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Shower taps</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Shower soap holder</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Floor grate</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Hand towel ring</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Towel rail</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Shower soap holder</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>
                    <tr>
                        <th scope="row">Mirror</th>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                        <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                        <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                        <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="card p-3 mb-3">
    <div class="custom-resp-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Brand</th>
                    <th>Model / Style</th>
                    <th>Supplier</th>
                    <th>Colour</th>
                    <th>$ or Qty</th>
                    <th colspan="3" class="text-center">( Tick One )</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="text-center">By Builder</th>
                    <th class="text-center">By Owner</th>
                    <th class="text-center">N /A</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table Rows -->
                <tr>
                    <th scope="row">Toilet & Cistern</th>
                    <td><input type="text" class="form-control form-control-sm" name="oven_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="oven_qty"></td>
                    <td class="text-center"><input type="radio" name="oven_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="oven_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="oven_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Toilet roll holder</th>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="cooktop_qty"></td>
                    <td class="text-center"><input type="radio" name="cooktop_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="cooktop_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="cooktop_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Bath</th>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="rangehood_qty"></td>
                    <td class="text-center"><input type="radio" name="rangehood_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="rangehood_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="rangehood_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Bath taps</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Bath plug & waste</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Bath soap holder</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Vanity</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Vanity taps</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Vanity plug & waste</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Shower screen</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Shower rose</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Shower taps</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Shower soap holder</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Floor grate</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>

                <tr>
                    <th scope="row">Hand towel ring</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
                <tr>
                    <th scope="row">Towel rall</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>

                <tr>
                    <th scope="row">Mirror</th>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_brand"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_model"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_supplier"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_colour"></td>
                    <td><input type="text" class="form-control form-control-sm" name="dishwasher_qty"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="builder"></td>
                    <td class="text-center"><input type="radio" name="dishwasher_by" value="owner"></td>
                    <td class="text-center"><input type="checkbox" name="dishwasher_na" value="na"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<div class="mt-3">
    <h5 class="fw-bold">General Notes to PC Selections:</h5>
    <p class="border p-3"></p>
    <p class="border p-3"></p>
    <p class="border p-3"></p>
</div>

<div class="mt-3">
    <p><strong>Note:</strong> Special fixing points or blocking may be required for wall-hung vanities and some shower screens. This should be checked with the manufacturer before wall and ceiling linings are installed.</p>
</div>
</div>