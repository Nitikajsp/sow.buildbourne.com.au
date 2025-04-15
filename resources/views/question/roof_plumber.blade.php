<!-- Section 7.1 -->
<div class="card p-3 mb-3">
    <h4 class="mb-4">7) ROOF & ROOF PLUMBER</h4>
    <h5>7.1 Metal Fascia & Barges</h5>
    <label for="Colour selection">Colour selection</label>
    <div class="d-flex">
        <!-- Zincalume radio -->
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_fascia_barges]" value="Zincalume"> Zincalume
        </label>

        <!-- Colorbond radio -->
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_fascia_barges]" value="Colorbond_colour"> Colorbond colour
        </label>
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="metal_fascia_barges" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][metal_fascia_barges]" id="metal_fascia_barges" placeholder="Enter metal fascia & barges notes">
    </div>
</div>


<div class="card p-3 mb-3">
    <h5>7.2 Metal Gutters</h5>

    <!-- Colour Selection -->
    <label for="Colour selection">Colour selection</label>
    <div class="d-flex">
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_gutters_colour]" value="Zincalume"> Zincalume
        </label>
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_gutters_colour]" value="Colorbond_colour"> Colorbond colour
        </label>
    </div>

    <!-- Gutter Type -->
    <label for="Colour selection">Gutter type</label>
    <div class="d-flex">
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_gutters_type]" value="Squareline"> Squareline
        </label>
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_gutters_type]" value="Quad_gutter"> Quad gutter
        </label>
    </div>

    <!-- Metal Leaf Guard -->
    <label for="Colour selection">Metal leaf guard</label>
    <div class="d-flex">
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_leaf_guard]" value="Yes"> Yes
        </label>
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_leaf_guard]" value="No"> No
        </label>
    </div>

    <!-- Notes Input -->
    <div class="d-flex align-items-center">
        <label for="metal_gutters" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][metal_gutters]" id="metal_gutters" placeholder="Enter metal gutters notes">
    </div>
</div>


<div class="card p-3 mb-3">
    <h5>7.3 Downpipes</h5>

    <!-- Colour Selection -->
    <label for="Colour selection">Colour selection</label>
    <div class="d-flex">
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_colour]" value="Colorbond_Colour"> Colorbond Colour
        </label>
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_colour]" value="Or Paint_Colour"> Or Paint Colour
        </label>
    </div>

    <!-- Type -->
    <label for="Type">Type</label>
    <div class="d-flex">
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_type]" value="Standard_PVC_90mm_dia_Round"> Standard PVC 90mm dia. Round
        </label>
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_type]" value="OTHER"> OTHER (Eg. Rectangular metal or Round metal)
        </label>
    </div>

    <!-- Notes -->
    <div class="form-group mt-2">
        <label>Notes to above:</label>
        <input type="text" class="form-control w-50" name="sow[roof_plumber][downpipes_notes]" placeholder="Enter Notes">
    </div>

    <!-- Additional radio Options -->
    <label class="form-check-label me-3">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_position_plan]" value="Show_preferred_position"> Show preferred position of downpipes on plumbing & drainage plan
    </label>
    <label class="form-check-label me-3">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_position_na]" value="N/A"> N/A
    </label>
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_not_all_same]" value="Show_various_positions"> If NOT all the same type or colour show various positions on plan
    </label>
    <label class="form-check-label me-3">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_various_positions_na]" value="N/A"> N/A
    </label>
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_water_tank_location]" value="Show_water_tank_location"> Show water tank location or direction to stormwater on plans
    </label>
    <label class="form-check-label me-3">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][downpipes_water_tank_na]" value="N/A"> N/A
    </label>

    <!-- Notes Input -->
    <div class="d-flex align-items-center">
        <label for="downpipes" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][downpipes]" id="downpipes" placeholder="Enter downpipes notes">
    </div>
</div>



<div class="card p-3 mb-3">
    <h5>7.4 Metal Roof & Cappings</h5>

    <!-- radio for As shown on plans -->
    <label class="form-check-label me-3">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_roof_cappings]" value="As_shown_on_plans"> As shown on plans
    </label>

    <!-- radio for N/A -->
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_roof_cappings]" value="N/A"> N/A
    </label>

    <!-- Colour selection -->
    <div>
        <label for="Colour selection">Colour selection</label><br>
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_colour]" value="Zincalume"> Zincalume
        </label>
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_colour]" value="Colorbond_colour"> Colorbond colour
        </label>
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="metal_roof_cappings" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][metal_roof_cappings]" id="metal_roof_cappings" placeholder="Enter metal roof & cappings notes">
    </div>

</div>


<div class="card p-3 mb-3">
    <h5>7.5 Roof Tiles</h5>

    <!-- radio for As shown on plans -->
    <label class="form-check-label me-3">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_tiles]" value="As_shown_on_plans"> As shown on plans
    </label>

    <!-- radio for N/A -->
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_tiles]" value="N/A"> N/A
    </label>

    <!-- Tile type selection -->
    <div>
        <label for="Tile type">Tile type</label><br>
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][tile_type]" value="Concrete"> Concrete
        </label>
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][tile_type]" value="Terracotta"> Terracotta
        </label>
    </div>

    <!-- Selected tiles details -->
    <div>
        <label for="Selected tiles">Selected tiles</label><br>

        <!-- Supplier input -->
        <div class="form-group mt-2">
            <label for="supplier">Supplier</label>
            <input type="text" class="form-control w-50" name="sow[roof_plumber][tile_supplier]" placeholder="Enter Supplier">
        </div>

        <!-- Style input -->
        <div class="form-group mt-2">
            <label for="style">Style</label>
            <input type="text" class="form-control w-50" name="sow[roof_plumber][tile_style]" placeholder="Enter Style">
        </div>

        <!-- Colour input -->
        <div class="form-group mt-2">
            <label for="colour">Colour</label>
            <input type="text" class="form-control w-50" name="sow[roof_plumber][tile_colour]" placeholder="Enter Colour">
        </div>
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="roof_tiles" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][roof_tiles]" id="roof_tiles" placeholder="Enter roof tiles notes">

    </div>
</div>


<div class="card p-3 mb-3">
    <h6 class="mb-4">7.6 Insulation / Moisture Barriers</h6>

    <!-- Standard for Metal Roof -->
    <label for="Standard for Metal Roof">Standard for Metal Roof</label>
    <div class="d-flex">
        <!-- radio for 55mm Anticon Blanket -->
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_roof_standard]" value="55mm_Anticon_Blanket_(Foil_backed_blanket)_Verandah's_NOT_included"> 55mm Anticon Blanket (Foil backed blanket) Verandah's NOT included
        </label>
        <!-- radio for N/A -->
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][metal_roof_standard]" value="N/A"> N/A
        </label>
    </div>

    <!-- Standard for Tiled Roof -->
    <label for="Standard for Tiled Roof">Standard for Tiled Roof</label>
    <div class="d-flex">
        <!-- radio for Sisalation foil -->
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][tiled_roof_standard]" value="Sisalation_foil_(sarking)"> Sisalation foil (sarking)
        </label>
        <!-- radio for N/A -->
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][tiled_roof_standard]" value="N/A"> N/A
        </label>
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="moisture_barriers" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][moisture_barriers]" id="moisture_barriers" placeholder="Enter  Insulation / Moisture Barriers notes">
    </div>
</div>



<div class="card p-3 mb-3">
    <h5>7.7 Roof Vents</h5>

    <!-- radio for "As shown on plans" -->
    <label class="form-check-label me-3">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_vents_plans]" value="As_shown_on_plans"> As shown on plans
    </label>

    <!-- radio for "N/A" -->
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_vents_plans]" value="N/A"> N/A
    </label>

    <!-- Colour selection -->
    <label for="Colour selection">Colour selection</label>
    <div class="d-flex">
        <!-- radio for Zincalume -->
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_vents_colour]" value="Zincalume"> Zincalume
        </label>

        <!-- radio for Colorbond colour -->
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][roof_vents_colour]" value="Colorbond_colour"> Colorbond colour
        </label>
    </div>

    <!-- Selection for Supplier -->
    <label for="Supplier">Supplier</label>
    <div>
        <input type="text" class="form-control w-50" name="sow[roof_plumber][roof_vents_supplier]" placeholder="Enter Supplier">
    </div>

    <!-- Selection for Style -->
    <label for="Style">Style</label>
    <div>
        <input type="text" class="form-control w-50" name="sow[roof_plumber][roof_vents_style]" placeholder="Enter Style">
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="roof_vents" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][roof_vents]" id="roof_vents" placeholder="Enter  roof vents notes">

    </div>
</div>

<div class="card p-3 mb-3">
    <h5>7.8 Sky Lights</h5>

    <!-- radio for "As shown on plans" -->
    <label class="form-check-label me-3">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][sky_lights_plans]" value="As_shown_on_plans"> As shown on plans
    </label>

    <!-- radio for "N/A" -->
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="sow[roof_plumber][sky_lights_plans]" value="N/A"> N/A
    </label>

    <!-- Colour selection -->
    <label for="Colour selection">Colour selection</label>
    <div class="d-flex">
        <!-- radio for Zincalume -->
        <label class="form-check-label me-3">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][sky_lights_colour]" value="Zincalume"> Zincalume
        </label>

        <!-- radio for Colorbond colour -->
        <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sow[roof_plumber][sky_lights_colour]" value="Colorbond_colour"> Colorbond colour
        </label>
    </div>

    <!-- Selection for Supplier -->
    <label for="Supplier">Supplier</label>
    <div>
        <input type="text" class="form-control w-50" name="sow[roof_plumber][sky_lights_supplier]" placeholder="Enter Supplier">
    </div>

    <!-- Selection for Style -->
    <label for="Style">Style</label>
    <div>
        <input type="text" class="form-control w-50" name="sow[roof_plumber][sky_lights_style]" placeholder="Enter Style">
    </div>

    <!-- Important Section -->
    <div class="p-3 mb-3" style="background: linear-gradient(to right, #ff7e5f, #feb47b); color: black;">
        <strong>IMPORTANT</strong>
        <p>Roofing and Rainwater goods in fire risk areas may have specific requirements to meet council consent (e.g. Leafless guttering, & Valleys Screened). Conditions of development application MUST be checked prior to finalisation of selection.</p>

        <!-- radio for "Bushfire Attack Level" -->
        <div class="d-flex align-items-center">
            <label class="me-2">Checked:</label>
            <input type="radio" name="sow[roof_plumber][fire_risk_checked]" checked class="me-3">
            <label>Bushfire Attack Level</label>
        </div>

        <!-- Input for "Checked By" -->
        <div class="mt-2">
            <label for="checked_by">Checked By:</label>
            <input type="text" id="checked_by" name="sow[roof_plumber][checked_by]" class="form-control d-inline-block w-50 ms-2" placeholder="Signature or Name">
        </div>

        <!-- Fire Risk Levels -->
        <small>(N/A, 12.5, 19, 29, 40, FZ as per AS3959-2009)</small>
    </div>
    <div class="d-flex align-items-center">
        <!-- Label and Input -->
        <label for="sky_lights" class="me-2 mb-0">Notes to above:</label>
        <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
            name="sow[site_work][sky_lights]" id="sky_lights" placeholder="Enter sky lights notes">

    </div>
</div>