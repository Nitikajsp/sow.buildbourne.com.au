<!-- Section Title -->

<!-- Section 4.1 -->
<div class="card p-4 my-3">
    <h4 class="mb-4">4) CARPENTER (Construction & Exterior)</h4>

    <h6>4.1 Steel House Floor System</h6>
    <div class="d-flex align-items-center mb-2">
        <span>Per Plans & Specifications</span>
        <input type="checkbox" name="plans_specifications" value="yes" class="ms-1 me-3">
        <span>N/A</span>
        <input type="checkbox" name="plans_na" value="yes" class="ms-1 me-3">
    </div>

    <table class="table table-bordered">
        <tr>
            <td>- Termite resistant particle board floor sheeting:</td>
            <td>
                N/A <input type="checkbox" name="termite_resistant_na" value="yes" class="ms-2">
            </td>
            <td>
                <input type="checkbox" name="termite_resistant" value="yes" class="ms-2">
            </td>
        </tr>
        <tr>
            <td>- Other:</td>
            <td>
                N/A <input type="checkbox" name="other_na" value="yes" class="ms-2">
            </td>
            <td>
                <input type="checkbox" name="other" value="yes" class="ms-2">
            </td>
        </tr>
        <tr>
            <td>- Floor Insulation:</td>
            <td>
                N/A <input type="checkbox" name="floor_insulation_na" value="yes" class="ms-2">
            </td>
            <td>
                <input type="checkbox" name="floor_insulation" value="yes" class="ms-2">
            </td>
        </tr>
    </table>
</div>


<!-- Section 4.2 -->
<div class="card p-4 my-3">
    <h6>4.2 Steel Verandah Floor System</h6>
    <div class="d-flex align-items-center mb-2">
        <span>Per Plans & Specifications</span>
        <input type="checkbox" name="verandah_plans_specifications" value="yes" class="ms-1 me-3">
        <span>N/A</span>
        <input type="checkbox" name="verandah_plans_na" value="yes" class="ms-1 me-3">
    </div>

    <table class="table table-bordered">
        <tr>
            <td>- Fibrous cement floor sheeting:</td>
            <td>
                N/A <input type="checkbox" name="fibrous_cement_na" value="yes" class="ms-2">
            </td>
            <td>
                <input type="checkbox" name="fibrous_cement" value="yes" class="ms-2">
            </td>
        </tr>
        <tr>
            <td>- Treated pine decking:</td>
            <td>
                N/A <input type="checkbox" name="treated_pine_na" value="yes" class="ms-2">
            </td>
            <td>
                <input type="checkbox" name="treated_pine" value="yes" class="ms-2">
            </td>
        </tr>
        <tr>
            <td>- Hardwood decking:</td>
            <td>
                N/A <input type="checkbox" name="hardwood_decking_na" value="yes" class="ms-2">
            </td>
            <td>
                <input type="checkbox" name="hardwood_decking" value="yes" class="ms-2"> (Timber Selection)
            </td>
        </tr>
    </table>
</div>


<!-- Section 4.3 -->
<div class="card p-4 my-3">
    <h6>4.3 Timber Verandah Floor System</h6>
    <div class="d-flex align-items-center mb-2">
        <span>Per Plans & Specifications</span>
        <input type="checkbox" name="timber_verandah_plans_specifications" value="yes" class="ms-1 me-3">
        <span>N/A</span>
        <input type="checkbox" name="timber_verandah_na" value="yes" class="ms-1 me-3">
    </div>

    <table class="table table-bordered">
        <tr>
            <td colspan="3">
                Per Plans & Specifications
                <input type="checkbox" name="timber_verandah_per_plans" value="yes" class="ms-2">
                N/A
                <input type="checkbox" name="timber_verandah_per_plans_na" value="yes" class="ms-2">
            </td>
        </tr>
    </table>

    <div class="p-3 mt-3" style="background-color: #e8f4ff;">
        <p>🛈 <strong>Floor Systems Note 1:</strong> Floor systems in fire risk areas may have specific requirements to meet council consent, such as fibre cement sheet lining under...</p>
        <p>🛈 <strong>Floor Systems Note 2:</strong> Conditions of Development Consent, Bushfire Assessment...
            <input type="checkbox" name="bushfire_assessment" value="yes" class="ms-2"> (Checked)
        </p>
    </div>
</div>

<!-- Section 4.4 -->
<div class="card p-4 my-3">
    <h6>4.4 Frames</h6>

    <div class="d-flex align-items-center mb-2">
        <span>Per Plans & Specifications</span>
        <input type="checkbox" name="frames_plans_specifications" value="yes" class="ms-1 me-3">
    </div>

    <p>
        - Standard 2750mm high (nom.)
        <input type="checkbox" name="standard_height" value="yes" class="ms-2">
        Other heights:
        <input type="text" name="other_heights" class="ms-2" style="width: 150px;">
    </p>

    <p>
        - Window & door sizes as per section 8 “windows & entry doors”
        <input type="checkbox" name="window_door_sizes" value="yes" class="ms-2"> (Checked)
    </p>

    <p>
        - Sisalation foil (sarking) to wall exterior prior to cladding <br>
        <input type="checkbox" name="sisalation_standard" value="yes" class="ms-2"> Standard
        <input type="checkbox" name="sisalation_other" value="yes" class="ms-2">
        Other: <input type="text" name="sisalation_other_text" class="ms-2" style="width: 150px;">
    </p>
</div>


<div class="card p-4 my-3">

    <!-- Section 4.5 -->
    <h5 class="mt-4">4.5 Roof Trusses & Beams</h5>

    <!-- Q1 -->
    <div class="card p-3 my-2 ">
        <div class="d-flex align-items-center mb-2">
            <span>Per Council Approved Plans & Specifications</span>
            <input type="checkbox" name="approved_plans" value="yes" class="ms-1 me-3">
            <span>N/A</span>
            <input type="checkbox" name="approved_plans" value="na" class="ms-1 me-3">
        </div>
    </div>

    <!-- Q2 -->
    <div class="card p-3 my-2 ">
        <div>Ceiling type:</div>
        <div class="d-flex flex-wrap">
            <div><input type="checkbox" name="ceiling_type[]" value="standard_level" class="ms-1"> Standard level</div>
            <div><input type="checkbox" name="ceiling_type[]" value="raked" class="ms-1"> Raked</div>
            <div><input type="checkbox" name="ceiling_type[]" value="scissor_raked" class="ms-1"> Scissor raked</div>
            <div><input type="checkbox" name="ceiling_type[]" value="other" class="ms-1"> Other</div>
        </div>
    </div>


    <div class="card p-3 my-2 ">
        <div class="d-flex align-items-center">
            <span>If "Not standard level" - check plans type/location etc.</span>
            <input type="checkbox" name="per_plans_specifications" value="yes" class="ms-1 me-3">

        </div>
    </div>

    <!-- Q4 -->

    <!-- Section 4.6 -->
    <h5 class="mt-4">4.6 Verandahs</h5>

    <!-- Q5 -->
    <div class="card p-3 my-2 ">
        <div class="d-flex align-items-center mb-2">
            <span>Per Plans & Specifications</span>
            <input type="checkbox" name="verandah_plans_specifications" value="yes" class="ms-1 me-3">
            <span>N/A</span>
            <input type="checkbox" name="verandah_plans_specifications" value="na" class="ms-1 me-3">
        </div>
    </div>

    <!-- Q6 -->
    <div class="card p-3 my-2">
        <div>
            <input type="checkbox" name="verandah_type[]" value="broken_pitch" class="me-1">
            Broken pitch off main roof, raked fibre cement sheet lining under
        </div>
        <div>
            <input type="checkbox" name="verandah_type[]" value="dropped_verandah" class="me-1">
            Dropped verandah, raked fibre cement sheet lining under
        </div>
        <div>
            <input type="checkbox" name="verandah_type[]" value="raked_broken_pitch" class="me-1">
            Raked or broken pitch verandah’s with level linings (subject to heights)
        </div>
        <div>
            <input type="checkbox" name="verandah_type[]" value="under_main_roof" class="me-1">
            Under main roof with fibre cement sheet level linings
        </div>
        <div>
            <input type="checkbox" name="verandah_type[]" value="bull_nose_roof" class="me-1">
            Bull nose roof std. treated pine posts, beams, whaling plate and hockey stick rafters
        </div>
        <small><strong>Note :</strong>: Bullnose verandah's over 1.8metre's may require "hockey stick rafters" and battens. At 1.8metres or less verandah's only require hip & gable end rafters.</small>

        <div>
            <input type="checkbox" name="verandah_type[]" value="other" class="me-1">
            Other verandah type:
            <input type="text" name="other_verandah_type" class="form-control mt-1" placeholder="Specify other verandah type">
        </div>
        <small><strong>Note :</strong>: For "other verandah" types check plans/specifications as required (eg: Members to be timber, timber type, size, dressed sawn etc).</small>

    </div>

    <!-- Q7 -->
    <div class="card p-3 my-2">
        <div>Notes to above:</div>
        <input type="text" name="notes_to_above" class="form-control mt-1" placeholder="Enter your notes here...">
    </div>


    <!-- Q8 -->
    <div class="card p-3 my-2">
        <div class="d-flex align-items-center">
            <span>Per Plans & Specifications</span>
            <input type="checkbox" name="q8_option" value="per_plans" class="ms-1 me-3">
            <span>N/A</span>
            <input type="checkbox" name="q8_option" value="na" class="ms-1">
        </div>
    </div>


    <!-- Section 4.7 -->
    <h5 class="mt-4">4.7 External Stairs</h5>

    <!-- Q9 -->
    <div class="card p-3 my-2">
        <div class="d-flex align-items-center mb-2">
            <span>Per Plans & Specifications</span>
            <input type="checkbox" name="q9_option" value="per_plans" class="ms-1 me-3">
            <span>N/A</span>
            <input type="checkbox" name="q9_option" value="na" class="ms-1 me-3">
        </div>
    </div>

    <!-- Q10 -->
    <div class="card p-3 my-2">
        <div>- If by builder:</div>
        <div class="d-flex flex-wrap">
            <div>
                <input type="checkbox" name="q10_option[]" value="fixed_price" class="ms-1">
                Fixed price included in quote
            </div>
            <div>
                <input type="checkbox" name="q10_option[]" value="provisional_sum" class="ms-1">
                Provisional Sum
            </div>
        </div>
    </div>


    <!-- Q11 -->
    <div class="card p-3 my-2">
        <div>- Tread type:</div>
        <div class="d-flex flex-wrap">
            <div>
                <input type="checkbox" name="q11_tread_type[]" value="precast_concrete" class="ms-1">
                Precast concrete
            </div>
            <div>
                <input type="checkbox" name="q11_tread_type[]" value="treaded_pine" class="ms-1">
                Treaded pine
            </div>
            <div>
                <input type="checkbox" name="q11_tread_type[]" value="hardwood" class="ms-1">
                Hardwood
            </div>
        </div>
    </div>


    <!-- Q12 -->
    <div class="card p-3 my-2">
        <div class="d-flex align-items-center">
            <span>Per Plans & Specifications</span>
            <input type="checkbox" name="q12_approval" value="per_plans" class="ms-1 me-3">
            <span>N/A</span>
            <input type="checkbox" name="q12_approval" value="na" class="ms-1">
        </div>
    </div>
</div>


<div class="card p-4 my-3">

    <!-- Hardwood Options -->
    <!-- Hardwood Options -->
    <div class="mt-4">
        <h5>Hardwood Options</h5>
        <div>- If <strong>“Hardwood”</strong> then:</div>
        <div class="mt-2">
            <input type="checkbox" name="hardwood_option" value="sawn_unseasoned" class="me-1"> Sawn unseasoned

            <input type="checkbox" name="hardwood_option" value="dressed_seasoned" class="ms-3 me-1"> Dressed seasoned – Type e.g. Merbau
            <input type="text" name="dressed_seasoned_type" class="ms-1 form-control d-inline-block w-auto" placeholder="............................">

            <input type="checkbox" name="hardwood_option" value="kiln_dried_dressed" class="ms-3 me-1"> Kiln dried dressed – Type e.g. Spotted Gum
            <input type="text" name="kiln_dried_dressed_type" class="ms-1 form-control d-inline-block w-auto" placeholder="............................">
        </div>
    </div>

    <!-- Important Section -->
    <!-- Important Section -->
    <div class="p-3 my-4" style="background-color: #f97316; color: #fff; border: 2px solid #000;">
        <h5><strong>IMPORTANT!</strong></h5>
        <p class="mb-1">
            Timber Stairs in fire risk areas may have specific requirements to meet council consent.
            Conditions of development application <strong>MUST</strong> be checked prior to finalisation of selections.
        </p>

        <div class="d-flex align-items-center mb-1">
            <div>Checked: <input type="checkbox" name="checked" value="yes" class="ms-1 me-3"></div>
            <div>Bushfire Attack Level</div>
        </div>

        <div class="mb-1">
            Checked By: <input type="text" name="checked_by" class="form-control d-inline-block w-auto" placeholder="Enter name">
        </div>

        <small>(N/A; 12.5, 19, 29, 40, FZ as per AS3959-2009)</small>
    </div>


    <!-- Section 4.8 -->
    <div class="mt-4">
        <h5>4.8 Features / Trims etc</h5>

        <!-- Question Block 1 -->
        <div class="mb-2">
            <input type="checkbox" name="options" value="na" class="me-1"> N/A
            <input type="checkbox" name="options" value="locations_per_plans" class="ms-3 me-1"> Locations per plans
            <input type="checkbox" name="options" value="selections_attached" class="ms-3 me-1"> Selections/type etc. attached
        </div>


        <!-- Question Block 2 -->
        <div class="mb-2">
            - Gable Vents:
            <input type="checkbox" name="gable_vents[]" value="required" class="ms-2 me-1"> Required
            <input type="checkbox" name="gable_vents[]" value="na" class="ms-2 me-1"> N/A
            <input type="checkbox" name="gable_vents[]" value="decorative_only" class="ms-2 me-1"> Decorative only
            <input type="checkbox" name="gable_vents[]" value="active_working" class="ms-2 me-1"> Active/Working
            <input type="checkbox" name="gable_vents[]" value="cut_out_hidden" class="ms-2 me-1"> Cut out hidden
            <input type="checkbox" name="gable_vents[]" value="decorative_brick_surround" class="ms-2 me-1"> Decorative brick surround
        </div>


        <!-- Question Block 3 -->
        <div class="mb-2">
            - Gable friezes & finials:
            <input type="checkbox" name="gable_friezes_finials[]" value="selection_attached" class="ms-2 me-1"> Selection/type attached
            <input type="checkbox" name="gable_friezes_finials[]" value="na" class="ms-2 me-1"> N/A
        </div>

        <!-- Question Block 4 -->
        <div>
            - Verandah post decorative bases:
            <input type="checkbox" name="verandah_post_bases[]" value="selection_attached" class="ms-2 me-1"> Selection/type attached
            <input type="checkbox" name="verandah_post_bases[]" value="na" class="ms-2 me-1"> N/A
        </div>

    </div>

    <!-- Notes Section -->
    <div class="mt-4">
        <h6>Notes to above:</h6>
        <textarea name="verandah_notes" class="form-control mt-1" rows="3" placeholder="Enter any additional notes here..."></textarea>
    </div>

</div>


<div class="card p-4 my-3">
    <!-- 4.9 Exterior Door Selections & Exterior Door Furniture -->
    <div class="mt-4">
        <h5>4.9 Exterior Door Selections & Exterior Door Furniture</h5>
        <p>- Door selections & Door furniture as per section 8 "Windows & Entry Doors"</p>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="doorSelectionsChecked" name="door_selections_checked">
            <label class="form-check-label" for="doorSelectionsChecked">(Checked)</label>
        </div>
    </div>


    <!-- 4.10 Eaves and Soffit Linings -->
    <div class="mt-4">
        <h5>4.10 Eaves and Soffit Linings</h5>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="standardEaves" name="eaves_standard">
            <label class="form-check-label" for="standardEaves">
                Standard Fibrous Cement Sheet lining to eaves with plastic joiners
            </label>
        </div>

        <div class="form-check mt-1">
            <input type="checkbox" class="form-check-input" id="otherEaves" name="eaves_other">
            <label class="form-check-label" for="otherEaves">
                Other eaves lining:
            </label>
            <input type="text" class="form-control d-inline-block w-50 ms-2" name="eaves_other_text" placeholder="Specify other eaves lining">
        </div>

        <div class="mt-2">
            <label for="eavesNotes">Notes to above:</label>
            <textarea class="form-control mt-1" id="eavesNotes" name="eaves_notes" rows="2" placeholder="................................................................................................................"></textarea>
        </div>
    </div>


    <!-- 4.11 External Cladding -->
    <div class="mt-4">
        <h5>4.11 External Cladding</h5>

        <div class="d-flex align-items-center mb-2">
            <span>Per Plans & Specifications</span>
            <input type="checkbox" class="ms-1 me-3" name="cladding_per_plans">
            <span>N/A</span>
            <input type="checkbox" class="ms-1 me-3" name="cladding_na">
        </div>

        <div class="mb-2">
            <input type="checkbox" class="me-1" name="cladding_timber_weathertex">
            <label>Timber & Weathertex Weatherboard:</label>
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="cladding_timber_type" placeholder="Type">
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="cladding_timber_profile" placeholder="Profile">
        </div>

        <div class="mb-2">
            <input type="checkbox" class="me-1" name="cladding_fibrous_weatherboard" checked>
            <label>Fibrous Cement Weatherboard:</label>
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="cladding_fibrous_type" placeholder="Type" value="SCYAM">
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="cladding_fibrous_profile" placeholder="Profile" value="STRIA">
        </div>

        <div class="mb-2">
            <input type="checkbox" class="me-1" name="cladding_fibrous_sheet">
            <label>Fibrous Cement Sheet or Other:</label>
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="cladding_fibrous_other_type" placeholder="Type">
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="cladding_fibrous_other_profile" placeholder="Profile">
        </div>

        <div class="mb-2">
            <input type="checkbox" class="me-1" name="cladding_metal">
            <label>Metal:</label>
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="cladding_metal_type" placeholder="Type">
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="cladding_metal_profile" placeholder="Profile">
            <input type="text" class="form-control d-inline-block w-auto ms-2" name="cladding_metal_colour" placeholder="Colour">
        </div>

        <div class="mt-3">
            <label>Gable options:</label>
            <div class="mt-1">
                <input type="checkbox" class="me-1" name="gable_same_selected" checked> Gables & walls "same as selected"
                <input type="checkbox" class="ms-4 me-1" name="gable_std_fibre_cement"> Gables only in "Std. fibre cement sheet"
            </div>
        </div>

        <div class="mt-2">
            <label for="cladding_notes">Notes to above:</label>
            <textarea class="form-control mt-1" id="cladding_notes" name="cladding_notes" rows="2" placeholder="................................................................................................................"></textarea>
        </div>
    </div>
</div>


<div class="card p-4 my-3">

    <!-- External Balustrade Section -->
    <div class="p-2 mb-3">
        <h5>4.12 External Balustrade</h5>
        <div class="d-flex align-items-center mb-2">
            <label class="me-3">
                <input type="checkbox" name="balustrade_per_plans" class="me-1"> Per Plans & Specifications
            </label>
            <label class="me-3">
                <input type="checkbox" name="balustrade_by_others" class="me-1"> By Others
            </label>
            <label>
                <input type="checkbox" name="balustrade_na" class="me-1"> N/A
            </label>
        </div>
    </div>


    <!-- Question 2 -->
    <div class="p-2 mb-3">
        <label>- If by builder:</label>
        <div>
            <label>
                <input type="checkbox" name="builder_option" value="fixed_price" class="me-1"> 1) Fixed price included in quote
            </label>
        </div>
        <div class="mt-1">
            <label>
                <input type="checkbox" name="builder_option" value="provisional_sum" class="me-1"> 2) Provisional Sum
            </label>
            <span class="ms-2">Amount to be shown at Section 16 "Schedule of Provisional Sums"</span>
        </div>
    </div>


    <div class="p-2 mb-3">
        <label for="balustrade_manufacturer">- Balustrade manufacturer:</label>
        <input type="text" name="balustrade_manufacturer" id="balustrade_manufacturer" class="form-control" value="">
    </div>


    <!-- Question 4 -->
    <div class="p-2 mb-3">
        <label>- Balustrade types:</label>
        <div class="row g-2">
            <div class="col-md-6">
                Type 1: <input type="text" name="balustrade_type_1" class="form-control d-inline-block w-75" value="">
            </div>
            <div class="col-md-6">
                Location 1: <input type="text" name="balustrade_location_1" class="form-control d-inline-block w-75" value="">
            </div>
            <div class="col-md-6">
                Type 2: <input type="text" name="balustrade_type_2" class="form-control d-inline-block w-75" value="">
            </div>
            <div class="col-md-6">
                Location 2: <input type="text" name="balustrade_location_2" class="form-control d-inline-block w-75" value="">
            </div>
            <div class="col-md-6">
                Type 3: <input type="text" name="balustrade_type_3" class="form-control d-inline-block w-75" value="">
            </div>
            <div class="col-md-6">
                Location 3: <input type="text" name="balustrade_location_3" class="form-control d-inline-block w-75" value="">
            </div>
        </div>
    </div>


    <!-- Notes Section -->
    <div class="p-2 mb-3">
        <p><i class="bi bi-info-circle"></i> <strong>Note 1:</strong> Balustrades to verandahs and/or stairs are required when the drop to ground is over 1 (One) metre.</p>
        <p><i class="bi bi-info-circle"></i> <strong>Note 2:</strong> Are there any special requirements for the builder such as fixing points or blocking?</p>
        <div>
            <input type="checkbox" name="checked_with_manufacturer" class="me-1" value="1"> (Checked with Manufacturer)
        </div>
    </div>


    <!-- Notes to above -->
    <div class="p-2 mb-3">
        <label for="balustrade_notes"><i class="bi bi-clipboard"></i> Notes to above:</label>
        <textarea id="balustrade_notes" name="balustrade_notes" class="form-control" rows="3" placeholder="Enter any relevant notes here..."></textarea>
    </div>


    <!-- Important Box -->
    <div class="p-3 mb-3" style="background: linear-gradient(to right, #ff7e5f, #feb47b); color: black;">
        <strong>IMPORTANT</strong>
        <p>Exposed exterior elements in fire risk areas may have specific requirements to meet council consent. Conditions of the development application <strong>MUST</strong> be checked prior to finalisation of selections.</p>

        <div class="d-flex align-items-center">
            <label class="me-2">Checked:</label>
            <input type="checkbox" name="fire_risk_checked" checked class="me-3">
            <label>Bushfire Attack Level</label>
        </div>

        <div class="mt-2">
            <label for="checked_by">Checked By:</label>
            <input type="text" id="checked_by" name="checked_by" class="form-control d-inline-block w-50 ms-2" placeholder="Signature or Name">
        </div>

        <small>(N/A, 12.5, 19, 29, 40, FZ as per AS3959-2009)</small>
    </div>

</div>