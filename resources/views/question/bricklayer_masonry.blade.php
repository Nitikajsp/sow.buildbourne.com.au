<!-- Section 6.1 -->
<div class="card p-3 mb-3">
    <h4 class="mb-4">6) BRICKLAYER / MASONRY</h4>
    <h5>6.1 Exterior Face Brickwork</h5>
    <div class="d-flex">
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][exterior_face_brickwork_plans]" value="as_shown_on_plans"> As shown on plans
        </label>
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][exterior_face_brickwork_na]" value="na"> N/A
        </label>
    </div>


    <!-- Face Brick Selections -->
    <h6>Face Brick Selections</h6>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][face_brick_commons]" value="Commons_only">
        <label class="form-check-label">Commons only</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][face_brick_selected]" value="Selected_bricks_Supplier">
        <label class="form-check-label">Selected bricks: Supplier</label>
        <input type="text" class="form-control mt-1 w-50" name="sow[bricklayer_masonry][supplier_name]" placeholder="Supplier Name" value="">
    </div>

    <div class="form-group mt-2">
        <label for="brick_name">Brick Name:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][brick_name]" id="brick_name" placeholder="Enter Brick Name" value="">
    </div>

    <div class="form-group mt-2">
        <label for="blend">Blend:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][blend]" id="blend" placeholder="Enter Blend" value="">
    </div>



    <!-- Laying -->
    <h6>Laying</h6>
    <div class="d-flex align-items-center">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][standard_laying_stretcher_bond]" value="standard_laying">
        <label class="form-check-label ms-2">Standard laying in stretcher bond</label>
        <span class="mx-2">OR</span>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][custom_laying_style]" value="" placeholder="Enter custom laying style">
    </div>

    <!-- Standard Sisalation Foil -->
    <h6>Standard Sisalation Foil</h6>
    <div class="d-flex align-items-center">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][standard_sisalation_foil]" value="standard_sisalation">
        <label class="form-check-label ms-2">Standard sisalation foil (sarking) to exterior brick veneer cavity walls</label>
        <span class="mx-2">Other:</span>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][other_sisalation_foil]" value="" placeholder="Enter other details">
    </div>


    <!-- Sills -->
    <h6>Sills</h6>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sills]" value="Cavity_walls">
        <label class="form-check-label">Cavity walls (standard brick on edge sloped)</label>
    </div>
    <div class="d-flex align-items-center mt-2">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sills]" value="Single_brick_walls">
        <label class="form-check-label ms-2">Single brick walls (std cut soldier course flush)</label>
        <span class="mx-2">Other:</span>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][other_sills]" placeholder="Specify Other" value="">
    </div>


    <!-- Brickwork Over Windows & Doors -->
    <h6>Brickwork Over Windows & Doors</h6>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_over_windows_doors]" value="In_bond_as_a_single_course_or_out_of_bond_as_a_soldier_course">
        <label class="form-check-label">In bond as a single course or out of bond as a soldier course</label>
    </div>
    <div class="d-flex align-items-center mt-2">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_over_windows_doors]" value="Over_windows_doors_as_a_soldier_course">
        <label class="form-check-label ms-2">Over windows & doors as a soldier course</label>
        <span class="mx-2">OR</span>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][other_brickwork]" placeholder="Specify Other" value="">
    </div>


    <!-- Brickwork Under Doors -->
    <h6>Brickwork Under Doors</h6>
    <div class="d-flex align-items-center">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_under_doors]" value="Under_doors_entry_and_laundry_doors ">
        <label class="form-check-label ms-2">Under doors, entry and laundry doors (generally tiled thresholds)</label>
        <span class="mx-2">OR</span>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][other_brickwork_under_doors]" placeholder="Specify Other" value="">
    </div>

    <!-- Notes -->
    <div class="card p-3 mb-3">
        <h6>Notes to Laying:</h6>
        <textarea class="form-control w-75" rows="3" name="sow[bricklayer_masonry][notes_to_laying]" placeholder="Enter any additional notes"></textarea>
    </div>


    <!-- Mortar Colour Selection -->
    <h6>Mortar (NOTE: SUPPLY OF MORTAR IS BY OWNER FOR KIT ONLY)</h6>
    <h6>Colour selection</h6>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Standard_natural_grey">
        <label class="form-check-label">Standard natural grey</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Standard_off_white">
        <label class="form-check-label">Standard off-white</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Oxide_coloured">
        <label class="form-check-label">Oxide coloured</label>
    </div>

    <div class="form-group mt-2">
        <label>Approx Colour:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][approx_colour]" placeholder="Enter Approx Colour">
    </div>

    <div class="form-group mt-2">
        <label>Notes to above:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][mortar_notes]" placeholder="Enter Notes">
    </div>


    <!-- Joint selection -->
    <h6>Joint selection</h6>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="Flush">
        <label class="form-check-label">Flush</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="Raked">
        <label class="form-check-label">Raked</label>
    </div>

    <div class="form-group mt-2">
        <label>Other:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][other_joint]" placeholder="Specify Other">
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="N/A">
        <label class="form-check-label">N/A</label>
        <label>Description:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][na_description]" placeholder="Enter Description">
    </div>


    <!-- Feature Work -->
    <h6>Feature Work</h6>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="Sandstone_capping_to_piers">
        <label class="form-check-label">Sandstone capping to piers (See PC Allowance)</label>
    </div>
    <div class="form-group mt-2">
        <label for="supplier_sandstone">Supplier:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][supplier_sandstone]" id="supplier_sandstone" placeholder="Enter Supplier">
    </div>
    <div class="form-group mt-2">
        <label for="style_sandstone">Style:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][style_sandstone]" id="style_sandstone" placeholder="Enter Style">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="Quoins">
        <label class="form-check-label">- Quoins (See PC Allowance)</label>
    </div>
    <div class="form-group mt-2">
        <label for="supplier_quoins">Supplier:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][supplier_quoins]" id="supplier_quoins" placeholder="Enter Supplier">
    </div>
    <div class="form-group mt-2">
        <label for="style_quoins">Style:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][style_quoins]" id="style_quoins" placeholder="Enter Style">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="Bulls eye openings">
        <label class="form-check-label">- Bulls eye openings for gable vents or Windows</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="Corbelling or other features">
        <label class="form-check-label">- Corbelling or other features as shown on plans and described as follows;</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][feature_work]" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>




    <!-- Sub Floor Vents -->
    <h6>Sub Floor Vents</h6>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="Standard_vent
        _built_into_brickwork_by_bricklayer_formed_using_brick_batts">
        <label class="form-check-label">- Standard vent built into brickwork by bricklayer formed using brick batts.</label><br>
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="Terracotta_or_coloured_precast_concrete">
        <label class="form-check-label">Terracotta or coloured precast concrete</label><br>
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="N/A">
        <label class="form-check-label">N/A</label><br>
        <label for="supplier_terracotta">Supplier:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][supplier_terracotta]" id="supplier_terracotta" placeholder="Enter Supplier">
        <label for="style_terracotta">Style:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][style_terracotta]" id="style_terracotta" placeholder="Enter Style">
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="Fire_compliant_for_Fire_Risk_Areas">
        <label class="form-check-label">Fire compliant for Fire Risk Areas</label><br>
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][sub_floor_vents]" value="N/A">
        <label class="form-check-label">N/A</label><br>
        <label for="supplier_fire_compliant">Supplier:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][supplier_fire_compliant]" id="supplier_fire_compliant" placeholder="Enter Supplier">
        <label for="style_fire_compliant">Style:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][style_fire_compliant]" id="style_fire_compliant" placeholder="Enter Style">
    </div>



    <!-- Weep Holes -->
    <h6>Weep Holes</h6>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="Standard_weep_holes">
        <label class="form-check-label">Standard weep holes (open perps)</label><br>
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="N/A">
        <label class="form-check-label">N/A</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="Fire_compliant_weep_holes_with_spark_arrester_inserts">
        <label class="form-check-label">Fire compliant weep holes with spark arrester inserts</label><br>
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="N/A">
        <label class="form-check-label">N/A</label><br>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="Other">
        <label class="form-check-label">Other</label><br>
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][weep_holes]" value="N/A">
        <label class="form-check-label">N/A</label><br>
    </div>


    <!-- Openings to Support Brickwork -->
    <h6>Openings to Support Brickwork</h6>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="Galvanised_arch_bars_to_be_installed_over_square_arch_openings">
        <label class="form-check-label">Galvanised arch bars to be installed over square arch openings</label><br>

        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="N_A">
        <label class="form-check-label">N/A</label>
    </div>


    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="Curved_arch_openings_as_per_plans_Extra_Cost">
        <label class="form-check-label">Curved arch openings as per plans (@ Extra Cost)</label><br>

        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="N_A">
        <label class="form-check-label">N/A</label><br>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="Standard_steel_door_jamb_to_single_brick_garage_P_A_door_opening">
        <label class="form-check-label">Standard steel door jamb to single brick garage P.A door opening</label><br>

        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][brickwork_openings]" value="N_A">
        <label class="form-check-label">N/A</label><br>
    </div>

    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="exterior_face_brickwork" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][exterior_face_brickwork]" id="exterior_face_brickwork" placeholder="Enter exterior face brickwork notes">
    </div>
</div>

<!-- Interior Feature Face Brickwork -->
<div class="card p-3 mb-3">
    <h6>6.2 Interior Feature Face Brickwork</h6>

    <!-- radio for "As shown on plans" -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][interior_feature_face_brickwork]" value="As_shown_on_plans">
    <label class="form-check-label">As shown on plans</label><br>

    <!-- radio for "N/A" -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][interior_feature_face_brickwork]" value="N_A">
    <label class="form-check-label">N/A</label>


    <h6>Face Brick Selections</h6>

    <!-- radio for "Commons only" -->
    <div class="form-check">
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][face_brick_selections]" value="Commons_only">
        <label class="form-check-label">Commons only</label><br>
    </div>

    <!-- Form for Selected bricks -->
    <div class="form-check">
        <label class="form-check-label">Selected bricks</label><br>

        <label for="supplier" class="mt-2">Supplier:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][supplier]" value="">

        <label for="brick_name" class="mt-2">Brick Name:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][brick_name]" value="">

        <label for="blend" class="mt-2">Blend:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][blend]" value="">
    </div>



    <h6>Mortar</h6>
    <h6>Colour selection:</h6>

    <!-- radio for Standard natural grey -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Standard_natural_grey">
    <label class="form-check-label">Standard natural grey</label>

    <!-- radio for Standard off-white -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Standard_off_white">
    <label class="form-check-label">Standard off-white</label>

    <!-- radio for Oxide coloured -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][mortar_colour]" value="Oxide_coloured">
    <label class="form-check-label">Oxide coloured</label>

    <!-- Input field for notes -->
    <div class="form-group mt-2">
        <label for="colcor_Selection_note">Notes to above:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colcor_Selection_note]" value="">
    </div>



    <h6>Joints</h6>
    <h6>Joint selection:</h6>

    <!-- radio for Flush -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="Flush">
    <label class="form-check-label">Flush</label>

    <!-- radio for Raked -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="Raked">
    <label class="form-check-label">Raked</label>

    <!-- radio for Other -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][joint_selection]" value="Other">
    <label class="form-check-label">Other</label>

    <!-- Input field for Description -->
    <div class="form-group mt-2">
        <label for="joint_description">Description:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][joint_description]" value="">
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="interior_feature_face_brickwork" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][interior_feature_face_brickwork]" id="interior_feature_face_brickwork" placeholder="Enter interior feature face brickwork notes">
    </div>
</div>


<div class="card p-3 mb-3">
    <h6>6.3 Exterior Brickwork - "Bag Rendered"</h6>

    <!-- radio for As Selected -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][bag_rendered_selection]" value="As_Selected">
    <label class="form-check-label">As Selected</label><br>


    <!-- radio for N/A -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][bag_rendered_selection]" value="N/A">
    <label class="form-check-label">N/A</label>

    <!-- Colour selection -->
    <div class="form-check">
        <label class="form-check-label">Colour selection:</label><br>

        <!-- Standard natural grey -->
        <label for="colour_standard_natural_grey">Standard natural grey</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_standard_natural_grey]" value="">

        <!-- Standard off-white -->
        <label for="colour_standard_off_white">Standard off-white</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_standard_off_white]" value="">

        <!-- Oxide coloured -->
        <label for="colour_oxide_coloured">Oxide coloured</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_oxide_coloured]" value="">
    </div>

    <!-- Notes to above -->
    <div class="form-group mt-2">
        <label for="notes_bag_rendered">Notes to above:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][notes_bag_rendered]" value="">
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="interior_feature_face_brickwork" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][interior_feature_face_brickwork]" id="interior_feature_face_brickwork" placeholder="Enter bag rendered notes">
    </div>
</div>


<div class="card p-3 mb-3">
    <h6>6.4 Exterior Brickwork - "Skim Rendered"</h6>

    <!-- radio for As Selected -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][skim_rendered_selection]" value="As_Selected">
    <label class="form-check-label">As Selected</label><br>

    <!-- radio for N/A -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][skim_rendered_selection]" value="N/A">
    <label class="form-check-label">N/A</label>

    <!-- Colour selection -->
    <div class="form-check">
        <label class="form-check-label">Colour selection:</label><br>

        <!-- Standard natural grey -->
        <label for="colour_standard_natural_grey">Standard natural grey</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_standard_natural_grey]" value="">

        <!-- Standard off-white -->
        <label for="colour_standard_off_white">Standard off-white</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_standard_off_white]" value="">

        <!-- Oxide coloured -->
        <label for="colour_oxide_coloured">Oxide coloured</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][colour_oxide_coloured]" value="">
    </div>

    <!-- Notes to above -->
    <div class="form-group mt-2">
        <label for="notes_skim_rendered">Notes to above:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][notes_skim_rendered]" value="">
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="skim_rendered" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][skim_rendered]" id="skim_rendered" placeholder="Enter skim rendered notes">
    </div>
</div>


<div class="card p-3 mb-3">
    <h6>6.5 Exterior Brickwork - "Full Render Coat Finish"</h6>

    <!-- radio for As Selected -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][full_render_coat_selection]" value="As_Selected">
    <label class="form-check-label">As Selected</label><br>

    <!-- radio for N/A -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][full_render_coat_selection]" value="N/A">
    <label class="form-check-label">N/A</label>

    <!-- Colour selection -->
    <div class="form-check">
        <label for="colour_standard_natural_grey">Standard natural grey</label>
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][colour_standard_natural_grey]" value="Standard_natural_grey">
    </div>

    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="full_render_coat_finish" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][full_render_coat_finish]" id="full_render_coat_finish" placeholder="Enter full render coat finish notes">
    </div>
</div>



<div class="card p-3 mb-3">
    <h6>6.6 Exterior Brickwork - "Other Coating Finish"</h6>

    <!-- radio for As Selected -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_coating_finish_selection]" value="As_Selected">
    <label class="form-check-label">As Selected</label><br>

    <!-- radio for N/A -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_coating_finish_selection]" value="N/A">
    <label class="form-check-label">N/A</label>

    <!-- Description and type input -->
    <div class="form-check">
        <label for="description_type">Description and type is:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][description_type]">
    </div>

    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="other_coating_finish" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][other_coating_finish]" id="other_coating_finish" placeholder="Enter other coating finish notes">
    </div>
</div>

<div class="card p-3 mb-3">
    <h6>6.7 Other Masonry</h6>

    <!-- radio for Per Plans & Specifications -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_selection]" value="Per_Plans_&_Specifications">
    <label class="form-check-label">Per Plans & Specifications</label>

    <!-- radio for N/A -->
    <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_selection]" value="N/A">
    <label class="form-check-label">N/A</label>

    <div class="form-check">
        <!-- Concrete Block Work radio -->
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_type]" value="Concrete_block_work">
        <label for="style">Concrete block work</label><br>

        <!-- Aerated Concrete radio -->
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_type]" value="Aerated_concrete_(Hebel)">
        <label for="style">Aerated concrete (Hebel)</label><br>

        <!-- Blue Board radio -->
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_type]" value="Blue_Board_(Fibre_Cement_Sheet_Acrylic_Rendered)">
        <label for="style">Blue Board (Fibre Cement Sheet Acrylic Rendered)</label><br>

        <!-- Foam Board radio -->
        <input class="form-check-input" type="radio" name="sow[bricklayer_masonry][other_masonry_type]" value="Foam_Board_(Foam_Board_Sheet_Acrylic_Rendered)">
        <label for="style">Foam Board (Foam Board Sheet Acrylic Rendered)</label>
    </div>

    <!-- Notes Input Field -->
    <div class="form-group mt-2">
        <label>Notes to above:</label>
        <input type="text" class="form-control w-50" name="sow[bricklayer_masonry][masonry_notes]">
    </div>


</div>