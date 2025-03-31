<!-- Section 6.1 -->
<div class="card p-3 mb-3">
    <h4 class="mb-4">6) BRICKLAYER / MASONRY</h4>
    <h5>6.1 Exterior Face Brickwork</h5>
    <div class="d-flex">
        <label class="form-check-label me-3">
            <input class="form-check-input" type="checkbox" name="exterior_face_brickwork_plans" value="as_shown_on_plans"> As shown on plans
        </label>
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="exterior_face_brickwork_na" value="na"> N/A
        </label>
    </div>
</div>

<!-- Face Brick Selections -->
<div class="card p-3 mb-3">
    <h6>Face Brick Selections</h6>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="face_brick_commons" value="Commons only">
        <label class="form-check-label">Commons only</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="face_brick_selected" value="Selected bricks: Supplier">
        <label class="form-check-label">Selected bricks: Supplier</label>
        <input type="text" class="form-control mt-1 w-50" name="supplier_name" placeholder="Supplier Name" value="">
    </div>

    <div class="form-group mt-2">
        <label for="brick_name">Brick Name:</label>
        <input type="text" class="form-control w-50" name="brick_name" id="brick_name" placeholder="Enter Brick Name" value="">
    </div>

    <div class="form-group mt-2">
        <label for="blend">Blend:</label>
        <input type="text" class="form-control w-50" name="blend" id="blend" placeholder="Enter Blend" value="">
    </div>
</div>



<!-- Laying -->
<div class="card p-3 mb-3">
    <h6>Laying</h6>
    <div class="d-flex align-items-center">
        <input class="form-check-input" type="checkbox" name="standard_laying_stretcher_bond" value="standard_laying">
        <label class="form-check-label ms-2">Standard laying in stretcher bond</label>
        <span class="mx-2">OR</span>
        <input type="text" class="form-control w-50" name="custom_laying_style" value="" placeholder="Enter custom laying style">
    </div>
</div>

<!-- Standard Sisalation Foil -->
<div class="card p-3 mb-3">
    <h6>Standard Sisalation Foil</h6>
    <div class="d-flex align-items-center">
        <input class="form-check-input" type="checkbox" name="standard_sisalation_foil" value="standard_sisalation">
        <label class="form-check-label ms-2">Standard sisalation foil (sarking) to exterior brick veneer cavity walls</label>
        <span class="mx-2">Other:</span>
        <input type="text" class="form-control w-50" name="other_sisalation_foil" value="" placeholder="Enter other details">
    </div>
</div>


<!-- Sills -->
<div class="card p-3 mb-3">
    <h6>Sills</h6>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="sills" value="Cavity walls (standard brick on edge sloped)">
        <label class="form-check-label">Cavity walls (standard brick on edge sloped)</label>
    </div>
    <div class="d-flex align-items-center mt-2">
        <input class="form-check-input" type="checkbox" name="sills" value="Single brick walls (std cut soldier course flush)">
        <label class="form-check-label ms-2">Single brick walls (std cut soldier course flush)</label>
        <span class="mx-2">Other:</span>
        <input type="text" class="form-control w-50" name="other_sills" placeholder="Specify Other" value="">
    </div>
</div>


<!-- Brickwork Over Windows & Doors -->
<div class="card p-3 mb-3">
    <h6>Brickwork Over Windows & Doors</h6>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="brickwork_over_windows_doors" value="In bond as a single course or out of bond as a soldier course">
        <label class="form-check-label">In bond as a single course or out of bond as a soldier course</label>
    </div>
    <div class="d-flex align-items-center mt-2">
        <input class="form-check-input" type="checkbox" name="brickwork_over_windows_doors" value="Over windows & doors as a soldier course">
        <label class="form-check-label ms-2">Over windows & doors as a soldier course</label>
        <span class="mx-2">OR</span>
        <input type="text" class="form-control w-50" name="other_brickwork" placeholder="Specify Other" value="">
    </div>
</div>


<!-- Brickwork Under Doors -->
<div class="card p-3 mb-3">
    <h6>Brickwork Under Doors</h6>
    <div class="d-flex align-items-center">
        <input class="form-check-input" type="checkbox" name="brickwork_under_doors" value="Under doors, entry and laundry doors (generally tiled thresholds)">
        <label class="form-check-label ms-2">Under doors, entry and laundry doors (generally tiled thresholds)</label>
        <span class="mx-2">OR</span>
        <input type="text" class="form-control w-50" name="other_brickwork_under_doors" placeholder="Specify Other" value="">
    </div>
</div>

<!-- Notes -->
<div class="card p-3 mb-3">
    <h6>Notes to Laying:</h6>
    <textarea class="form-control w-75" rows="3" name="notes_to_laying" placeholder="Enter any additional notes"></textarea>
</div>


<!-- Mortar Colour Selection -->
<div class="card p-3 mb-3">
    <h4>Mortar (NOTE: SUPPLY OF MORTAR IS BY OWNER FOR KIT ONLY)</h4>
    <h6>Colour selection</h6>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="mortar_colour" value="Standard natural grey">
        <label class="form-check-label">Standard natural grey</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="mortar_colour" value="Standard off-white">
        <label class="form-check-label">Standard off-white</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="mortar_colour" value="Oxide coloured">
        <label class="form-check-label">Oxide coloured</label>
    </div>

    <div class="form-group mt-2">
        <label>Approx Colour:</label>
        <input type="text" class="form-control w-50" name="approx_colour" placeholder="Enter Approx Colour">
    </div>

    <div class="form-group mt-2">
        <label>Notes to above:</label>
        <input type="text" class="form-control w-50" name="mortar_notes" placeholder="Enter Notes">
    </div>
</div>


<!-- Joint selection -->
<div class="card p-3 mb-3">
    <h4>Joint selection</h4>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="joint_selection" value="Flush">
        <label class="form-check-label">Flush</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="joint_selection" value="Raked">
        <label class="form-check-label">Raked</label>
    </div>

    <div class="form-group mt-2">
        <label>Other:</label>
        <input type="text" class="form-control w-50" name="other_joint" placeholder="Specify Other">
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="joint_selection" value="N/A">
        <label class="form-check-label">N/A</label>
        <label>Description:</label>
        <input type="text" class="form-control w-50" name="na_description" placeholder="Enter Description">
    </div>
</div>


<!-- Feature Work -->
<div class="card p-3 mb-3">
    <h4>Feature Work</h4>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="feature_work" value="Sandstone capping to piers">
        <label class="form-check-label">Sandstone capping to piers (See PC Allowance)</label>
    </div>
    <div class="form-group mt-2">
        <label for="supplier_sandstone">Supplier:</label>
        <input type="text" class="form-control w-50" name="supplier_sandstone" id="supplier_sandstone" placeholder="Enter Supplier">
    </div>
    <div class="form-group mt-2">
        <label for="style_sandstone">Style:</label>
        <input type="text" class="form-control w-50" name="style_sandstone" id="style_sandstone" placeholder="Enter Style">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="feature_work" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="feature_work" value="Quoins">
        <label class="form-check-label">- Quoins (See PC Allowance)</label>
    </div>
    <div class="form-group mt-2">
        <label for="supplier_quoins">Supplier:</label>
        <input type="text" class="form-control w-50" name="supplier_quoins" id="supplier_quoins" placeholder="Enter Supplier">
    </div>
    <div class="form-group mt-2">
        <label for="style_quoins">Style:</label>
        <input type="text" class="form-control w-50" name="style_quoins" id="style_quoins" placeholder="Enter Style">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="feature_work" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="feature_work" value="Bulls eye openings">
        <label class="form-check-label">- Bulls eye openings for gable vents or Windows</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="feature_work" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="feature_work" value="Corbelling or other features">
        <label class="form-check-label">- Corbelling or other features as shown on plans and described as follows;</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="feature_work" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>
</div>




<!-- Sub Floor Vents -->
<div class="card p-3 mb-3">
    <h4>Sub Floor Vents</h4>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="sub_floor_vents" value="Standard vent built into brickwork by bricklayer formed using brick batts">
        <label class="form-check-label">- Standard vent built into brickwork by bricklayer formed using brick batts.</label><br>
        <input class="form-check-input" type="checkbox" name="sub_floor_vents" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="sub_floor_vents" value="Terracotta or coloured precast concrete">
        <label class="form-check-label">Terracotta or coloured precast concrete</label><br>
        <input class="form-check-input" type="checkbox" name="sub_floor_vents" value="N/A">
        <label class="form-check-label">N/A</label><br>
        <label for="supplier_terracotta">Supplier:</label>
        <input type="text" class="form-control w-50" name="supplier_terracotta" id="supplier_terracotta" placeholder="Enter Supplier">
        <label for="style_terracotta">Style:</label>
        <input type="text" class="form-control w-50" name="style_terracotta" id="style_terracotta" placeholder="Enter Style">
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="sub_floor_vents" value="Fire compliant for Fire Risk Areas">
        <label class="form-check-label">Fire compliant for Fire Risk Areas</label><br>
        <input class="form-check-input" type="checkbox" name="sub_floor_vents" value="N/A">
        <label class="form-check-label">N/A</label><br>
        <label for="supplier_fire_compliant">Supplier:</label>
        <input type="text" class="form-control w-50" name="supplier_fire_compliant" id="supplier_fire_compliant" placeholder="Enter Supplier">
        <label for="style_fire_compliant">Style:</label>
        <input type="text" class="form-control w-50" name="style_fire_compliant" id="style_fire_compliant" placeholder="Enter Style">
    </div>
</div>



<!-- Weep Holes -->
<div class="card p-3 mb-3">
    <h4>Weep Holes</h4>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="weep_holes" value="Standard weep holes (open perps)">
        <label class="form-check-label">Standard weep holes (open perps)</label><br>
        <input class="form-check-input" type="checkbox" name="weep_holes" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="weep_holes" value="Fire compliant weep holes with spark arrester inserts">
        <label class="form-check-label">Fire compliant weep holes with spark arrester inserts</label><br>
        <input class="form-check-input" type="checkbox" name="weep_holes" value="N/A">
        <label class="form-check-label">N/A</label><br>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="weep_holes" value="Other">
        <label class="form-check-label">Other</label><br>
        <input class="form-check-input" type="checkbox" name="weep_holes" value="N/A">
        <label class="form-check-label">N/A</label><br>
    </div>
</div>


<!-- Openings to Support Brickwork -->
<div class="card p-3 mb-3">
    <h4>Openings to Support Brickwork</h4>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="brickwork_openings" value="Galvanised arch bars to be installed over square arch openings">
        <label class="form-check-label">Galvanised arch bars to be installed over square arch openings</label><br>
        <input class="form-check-input" type="checkbox" name="brickwork_openings" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="brickwork_openings" value="Curved arch openings as per plans (@ Extra Cost)">
        <label class="form-check-label">Curved arch openings as per plans (@ Extra Cost)</label><br>
        <input class="form-check-input" type="checkbox" name="brickwork_openings" value="N/A">
        <label class="form-check-label">N/A</label><br>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="brickwork_openings" value="Standard steel door jamb to single brick garage P.A door opening">
        <label class="form-check-label">Standard steel door jamb to single brick garage P.A door opening</label><br>
        <input class="form-check-input" type="checkbox" name="brickwork_openings" value="N/A">
        <label class="form-check-label">N/A</label><br>
    </div>
</div>

<!-- Interior Feature Face Brickwork -->
<div class="card p-3 mb-3">
    <h6>6.2 Interior Feature Face Brickwork</h6>

    <!-- Checkbox for "As shown on plans" -->
    <input class="form-check-input" type="checkbox" name="interior_feature_face_brickwork" value="As shown on plans">
    <label class="form-check-label">As shown on plans</label><br>

    <!-- Checkbox for "N/A" -->
    <input class="form-check-input" type="checkbox" name="interior_feature_face_brickwork" value="N/A">
    <label class="form-check-label">N/A</label>

    <h4>Face Brick Selections</h4>

    <!-- Checkbox for "Commons only" -->
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="face_brick_selections" value="Commons only">
        <label class="form-check-label">Commons only</label><br>
    </div>

    <!-- Form for Selected bricks -->
    <div class="form-check">
        <label class="form-check-label">Selected bricks</label><br>

        <label for="supplier" class="mt-2">Supplier:</label>
        <input type="text" class="form-control w-50" name="supplier" value="">

        <label for="brick_name" class="mt-2">Brick Name:</label>
        <input type="text" class="form-control w-50" name="brick_name" value="">

        <label for="blend" class="mt-2">Blend:</label>
        <input type="text" class="form-control w-50" name="blend" value="">
    </div>
</div>


<div class="card p-3 mb-3">
    <h4>Mortar</h4>
    <h6>Colour selection:</h6>

    <!-- Checkbox for Standard natural grey -->
    <input class="form-check-input" type="checkbox" name="mortar_colour" value="Standard natural grey">
    <label class="form-check-label">Standard natural grey</label>

    <!-- Checkbox for Standard off-white -->
    <input class="form-check-input" type="checkbox" name="mortar_colour" value="Standard off-white">
    <label class="form-check-label">Standard off-white</label>

    <!-- Checkbox for Oxide coloured -->
    <input class="form-check-input" type="checkbox" name="mortar_colour" value="Oxide coloured">
    <label class="form-check-label">Oxide coloured</label>

    <!-- Input field for notes -->
    <div class="form-group mt-2">
        <label for="colcor_Selection_note">Notes to above:</label>
        <input type="text" class="form-control w-50" name="colcor_Selection_note" value="">
    </div>
</div>


<div class="card p-3 mb-3">
    <h4>Joints</h4>
    <h6>Joint selection:</h6>

    <!-- Checkbox for Flush -->
    <input class="form-check-input" type="checkbox" name="joint_selection" value="Flush">
    <label class="form-check-label">Flush</label>

    <!-- Checkbox for Raked -->
    <input class="form-check-input" type="checkbox" name="joint_selection" value="Raked">
    <label class="form-check-label">Raked</label>

    <!-- Checkbox for Other -->
    <input class="form-check-input" type="checkbox" name="joint_selection" value="Other">
    <label class="form-check-label">Other</label>

    <!-- Input field for Description -->
    <div class="form-group mt-2">
        <label for="joint_description">Description:</label>
        <input type="text" class="form-control w-50" name="joint_description" value="">
    </div>
</div>


<div class="card p-3 mb-3">
    <h6>6.3 Exterior Brickwork - "Bag Rendered"</h6>

    <!-- Checkbox for As Selected -->
    <input class="form-check-input" type="checkbox" name="bag_rendered_selection" value="As Selected">
    <label class="form-check-label">As Selected</label><br>

    <!-- Checkbox for N/A -->
    <input class="form-check-input" type="checkbox" name="bag_rendered_selection" value="N/A">
    <label class="form-check-label">N/A</label>

    <!-- Colour selection -->
    <div class="form-check">
        <label class="form-check-label">Colour selection:</label><br>

        <!-- Standard natural grey -->
        <label for="colour_standard_natural_grey">Standard natural grey</label>
        <input type="text" class="form-control w-50" name="colour_standard_natural_grey" value="">

        <!-- Standard off-white -->
        <label for="colour_standard_off_white">Standard off-white</label>
        <input type="text" class="form-control w-50" name="colour_standard_off_white" value="">

        <!-- Oxide coloured -->
        <label for="colour_oxide_coloured">Oxide coloured</label>
        <input type="text" class="form-control w-50" name="colour_oxide_coloured" value="">
    </div>

    <!-- Notes to above -->
    <div class="form-group mt-2">
        <label for="notes_bag_rendered">Notes to above:</label>
        <input type="text" class="form-control w-50" name="notes_bag_rendered" value="">
    </div>
</div>


<div class="card p-3 mb-3">
    <h6>6.4 Exterior Brickwork - "Skim Rendered"</h6>

    <!-- Checkbox for As Selected -->
    <input class="form-check-input" type="checkbox" name="skim_rendered_selection" value="As Selected">
    <label class="form-check-label">As Selected</label><br>

    <!-- Checkbox for N/A -->
    <input class="form-check-input" type="checkbox" name="skim_rendered_selection" value="N/A">
    <label class="form-check-label">N/A</label>

    <!-- Colour selection -->
    <div class="form-check">
        <label class="form-check-label">Colour selection:</label><br>

        <!-- Standard natural grey -->
        <label for="colour_standard_natural_grey">Standard natural grey</label>
        <input type="text" class="form-control w-50" name="colour_standard_natural_grey" value="">

        <!-- Standard off-white -->
        <label for="colour_standard_off_white">Standard off-white</label>
        <input type="text" class="form-control w-50" name="colour_standard_off_white" value="">

        <!-- Oxide coloured -->
        <label for="colour_oxide_coloured">Oxide coloured</label>
        <input type="text" class="form-control w-50" name="colour_oxide_coloured" value="">
    </div>

    <!-- Notes to above -->
    <div class="form-group mt-2">
        <label for="notes_skim_rendered">Notes to above:</label>
        <input type="text" class="form-control w-50" name="notes_skim_rendered" value="">
    </div>
</div>



<div class="card p-3 mb-3">
    <h6>6.5 Exterior Brickwork - "Full Render Coat Finish"</h6>

    <!-- Checkbox for As Selected -->
    <input class="form-check-input" type="checkbox" name="full_render_coat_selection" value="As Selected">
    <label class="form-check-label">As Selected</label><br>

    <!-- Checkbox for N/A -->
    <input class="form-check-input" type="checkbox" name="full_render_coat_selection" value="N/A">
    <label class="form-check-label">N/A</label>

    <!-- Colour selection -->
    <div class="form-check">
        <label for="colour_standard_natural_grey">Standard natural grey</label>
        <input class="form-check-input" type="checkbox" name="colour_standard_natural_grey" value="Standard natural grey">
    </div>
</div>


<div class="card p-3 mb-3">
    <h6>6.6 Exterior Brickwork - "Other Coating Finish"</h6>

    <!-- Checkbox for As Selected -->
    <input class="form-check-input" type="checkbox" name="other_coating_finish_selection" value="As Selected">
    <label class="form-check-label">As Selected</label><br>

    <!-- Checkbox for N/A -->
    <input class="form-check-input" type="checkbox" name="other_coating_finish_selection" value="N/A">
    <label class="form-check-label">N/A</label>

    <!-- Description and type input -->
    <div class="form-check">
        <label for="description_type">Description and type is:</label>
        <input type="text" class="form-control w-50" name="description_type">
    </div>
</div>


<div class="card p-3 mb-3">
    <h6>6.7 Other Masonry</h6>

    <!-- Checkbox for Per Plans & Specifications -->
    <input class="form-check-input" type="checkbox" name="other_masonry_selection" value="Per Plans & Specifications">
    <label class="form-check-label">Per Plans & Specifications</label>

    <!-- Checkbox for N/A -->
    <input class="form-check-input" type="checkbox" name="other_masonry_selection" value="N/A">
    <label class="form-check-label">N/A</label>

    <div class="form-check">
        <!-- Concrete Block Work Checkbox -->
        <input class="form-check-input" type="checkbox" name="other_masonry_type" value="Concrete block work">
        <label for="style">Concrete block work</label><br>

        <!-- Aerated Concrete Checkbox -->
        <input class="form-check-input" type="checkbox" name="other_masonry_type" value="Aerated concrete (Hebel)">
        <label for="style">Aerated concrete (Hebel)</label><br>

        <!-- Blue Board Checkbox -->
        <input class="form-check-input" type="checkbox" name="other_masonry_type" value="Blue Board (Fibre Cement Sheet Acrylic Rendered)">
        <label for="style">Blue Board (Fibre Cement Sheet Acrylic Rendered)</label><br>

        <!-- Foam Board Checkbox -->
        <input class="form-check-input" type="checkbox" name="other_masonry_type" value="Foam Board (Foam Board Sheet Acrylic Rendered)">
        <label for="style">Foam Board (Foam Board Sheet Acrylic Rendered)</label>
    </div>

    <!-- Notes Input Field -->
    <div class="form-group mt-2">
        <label>Notes to above:</label>
        <input type="text" class="form-control w-50" name="masonry_notes">
    </div>
</div>