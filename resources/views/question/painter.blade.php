<div class="card p-3 mb-3">

    <h4>PAINTER</h4>

    <h5>13.1 Colour Selections
    </h5>

    <div class="form-group row">
        <div class="col-sm-12">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="colour_selection_by" id="colour_selection_below" value="below" checked>
                <label class="form-check-label" for="colour_selection_below">Per Selections Below</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="colour_selection_by" id="colour_selection_owner" value="owner">
                <label class="form-check-label" for="colour_selection_owner">By Owner</label>
            </div>
        </div>
    </div>

    <p class="font-weight-bold">Note 1 :</p>
    <p class="text-muted">Our painters use quality brand paints and Taubmans are the main paint supplier of paints for Freedom Homes . If a different paint brand is requested an extra charge maybe applicable .</p>

    <p class="font-weight-bold">Note 2 :</p>
    <p class="text-muted">Standard painting allowance for - Internal 1 ceiling colour , 1 wall colour and 1 colour for timberwork and internal doors ( unless timberwork stained & doors painted ) External 1 colour for external cladding , 1 colour for external features ( eg . decorative gable trims , posts , beams and external doors ) , 1 colour for eaves and verandah linings . Plastic downpipes painted same as a primary colour on exterior . Timber Decking's & Timber Step Treads 2 coats of water based decking oil . Not included is painting of galvanized arch bars .</p>

    <div class="font-weight-bold mt-3 mb-2">EXTERNAL</div>
    <div class="custom-resp-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Colour</th>
                    <th scope="col">N/A</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Hardi plank</th>
                    <td><input type="text" name="hardi_plank_value" class="form-control form-control-sm"></td>
                    <td>
                        <input type="hidden" name="hardi_plank_check" value="unchecked">
                        <input type="checkbox" name="hardi_plank_check" value="checked" class="form-check-input">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Eaves</th>
                    <td><input type="text" name="eaves_value" class="form-control form-control-sm"></td>
                    <td>
                        <input type="hidden" name="eaves_check" value="unchecked">
                        <input type="checkbox" name="eaves_check" value="checked" class="form-check-input">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Gable</th>
                    <td><input type="text" name="gable_value" class="form-control form-control-sm"></td>
                    <td>
                        <input type="hidden" name="gable_check" value="unchecked">
                        <input type="checkbox" name="gable_check" value="checked" class="form-check-input">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Barge</th>
                    <td><input type="text" name="barge_value" class="form-control form-control-sm"></td>
                    <td>
                        <input type="hidden" name="barge_check" value="unchecked">
                        <input type="checkbox" name="barge_check" value="checked" class="form-check-input">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Finial</th>
                    <td><input type="text" name="finial_value" class="form-control form-control-sm"></td>
                    <td>
                        <input type="hidden" name="finial_check" value="unchecked">
                        <input type="checkbox" name="finial_check" value="checked" class="form-check-input">
                    </td>
                </tr>
                <tr>
                    <th scope="row">Front entry door</th>
                    <td><input type="text" name="front_entry_door_value" class="form-control form-control-sm"></td>
                    <td>
                        <input type="hidden" name="front_entry_door_check" value="unchecked">
                        <input type="checkbox" name="front_entry_door_check" value="checked" class="form-check-input">
                    </td>
                </tr>
            </tbody>

        </table>
    </div>


    <div class="form-group mt-3">
        <label for="external_notes">Notes to above</label>
        <textarea class="form-control" id="external_notes" rows="3"></textarea>
    </div>
    <div class="font-weight-bold font-size-lg mb-3">INTERNAL COLOURS</div>
    <div class="custom-resp-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Ceiling</th>
                    <th scope="col">Wall</th>
                    <th scope="col">Doors</th>
                    <th scope="col">Woodwork</th>
                    <th scope="col">N / A</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Entry</th>
                    <td><input type="text" name="entry_ceiling" class="form-control form-control-sm"></td>
                    <td><input type="text" name="entry_wall" class="form-control form-control-sm"></td>
                    <td><input type="text" name="entry_doors" class="form-control form-control-sm"></td>
                    <td><input type="text" name="entry_woodwork" class="form-control form-control-sm"></td>
                    <td><input type="checkbox" name="entry_na" class="form-check-input" value="1"></td>
                </tr>
                <tr>
                    <th scope="row">Hall</th>
                    <td><input type="text" name="hall_ceiling" class="form-control form-control-sm"></td>
                    <td><input type="text" name="hall_wall" class="form-control form-control-sm"></td>
                    <td><input type="text" name="hall_doors" class="form-control form-control-sm"></td>
                    <td><input type="text" name="hall_woodwork" class="form-control form-control-sm"></td>
                    <td><input type="checkbox" name="hall_na" class="form-check-input" value="1"></td>
                </tr>
                <tr>
                    <th scope="row">Dining</th>
                    <td><input type="text" name="dining_ceiling" class="form-control form-control-sm"></td>
                    <td><input type="text" name="dining_wall" class="form-control form-control-sm"></td>
                    <td><input type="text" name="dining_doors" class="form-control form-control-sm"></td>
                    <td><input type="text" name="dining_woodwork" class="form-control form-control-sm"></td>
                    <td><input type="checkbox" name="dining_na" class="form-check-input" value="1"></td>
                </tr>
                <tr>
                    <th scope="row">Kitchen</th>
                    <td><input type="text" name="kitchen_ceiling" class="form-control form-control-sm"></td>
                    <td><input type="text" name="kitchen_wall" class="form-control form-control-sm"></td>
                    <td><input type="text" name="kitchen_doors" class="form-control form-control-sm"></td>
                    <td><input type="text" name="kitchen_woodwork" class="form-control form-control-sm"></td>
                    <td><input type="checkbox" name="kitchen_na" class="form-check-input" value="1"></td>
                </tr>
                <tr>
                    <th scope="row">Family</th>
                    <td><input type="text" name="family_ceiling" class="form-control form-control-sm"></td>
                    <td><input type="text" name="family_wall" class="form-control form-control-sm"></td>
                    <td><input type="text" name="family_doors" class="form-control form-control-sm"></td>
                    <td><input type="text" name="family_woodwork" class="form-control form-control-sm"></td>
                    <td><input type="checkbox" name="family_na" class="form-check-input" value="1"></td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="font-weight-bold mt-4 mb-3">INTERNAL STAIRS & HANDRAILS COLOURS</div>
    <div class="custom-resp-table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Component</th>
                    <th scope="col">Stringers</th>
                    <th scope="col">Treads</th>
                    <th scope="col">Balustrade</th>
                    <th scope="col">Newel posts</th>
                    <th scope="col">Balusters</th>
                    <th scope="col">N / A</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Selection</th>
                    <td><input type="text" name="stringers" value="" class="form-control form-control-sm"></td>
                    <td><input type="text" name="treads" value="" class="form-control form-control-sm"></td>
                    <td><input type="text" name="balustrade" value="" class="form-control form-control-sm"></td>
                    <td><input type="text" name="newel_posts" value="" class="form-control form-control-sm"></td>
                    <td><input type="text" name="balusters" value="" class="form-control form-control-sm"></td>
                    <td><input type="checkbox" name="na" value="1" class="form-check-input"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card p-3 mb-3">
    <h5>13.2 Paint Types</h5>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">- Ceilings :</label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="ceilings[]" id="ceilings_flat" value="flat" checked>
                <label class="form-check-label" for="ceilings_flat">Flat water based - Spray 1<sup>st</sup> Coat , Roll 2<sup>nd</sup> Coat</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="ceilings[]" id="ceilings_na" value="na">
                <label class="form-check-label" for="ceilings_na">N / A</label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">- Internal walls :</label>
        <div class="col-sm-9">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="internal_walls[]" id="internal_walls_low_sheen" value="low_sheen" checked>
                <label class="form-check-label" for="internal_walls_low_sheen">Low sheen wash & wear water based - 3 Coats</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="internal_walls[]" id="internal_walls_enamel" value="enamel">
                <label class="form-check-label" for="internal_walls_enamel">Enamel ( Gloss )</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="internal_walls[]" id="internal_walls_na" value="na">
                <label class="form-check-label" for="internal_walls_na">N / A</label>
            </div>
        </div>
    </div>

    <!-- Repeat for each category -->

</div>

<div class="card p-3 mb-3">
    <h5>13.3 Feature Walls</h5>

    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Internal feature walls: Location(s) shown on plans</label>
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="feature_walls_builder" name="feature_walls[]" value="builder">
                <label class="form-check-label" for="feature_walls_builder">By Builder (Checked)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="feature_walls_na" name="feature_walls[]" value="na" checked>
                <label class="form-check-label" for="feature_walls_na">N / A</label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="feature_walls_notes">Notes to above:</label>
        <textarea class="form-control" id="feature_walls_notes" name="feature_walls_notes" rows="3"></textarea>
    </div>
</div>