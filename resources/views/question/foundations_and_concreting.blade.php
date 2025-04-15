<!-- Section Container -->
<div class="card p-4 my-3">
    <h4>2) FOUNDATIONS & CONCRETING</h4>

    <!-- Question 2.1 -->
    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>2.1 Surveyor Set Out</h5>
            <div>
                <label class="me-3">
                    By Builder
                    <input type="radio" class="form-check-input" name="sow[surveyor_set_out][surveyor_set]" value="builder" checked>
                </label>
                <label class="me-3">
                    By Owner
                    <input type="radio" class="form-check-input" name="sow[surveyor_set_out][surveyor_set]" value="owner">
                </label>
                <label>
                    N/A
                    <input type="radio" class="form-check-input" name="sow[surveyor_set_out][surveyor_set]" value="na">
                </label>
            </div>
        </div>
        <div class="d-flex align-items-center">

            <!-- Label and Input -->

            <label for="surveyor_set_out" class="me-2 mb-0">Notes to above:</label>
            <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                name="sow[surveyor_set_out][surveyor_set_out]" id="surveyor_set_out" placeholder="Enter Surveyor Set Out notes">
        </div>
    </div>

    <!-- Question 2.2 -->
    <div class="card mb-3">
        <div class="card-header">
            <h5>2.2 Concrete Slab Floors</h5>
        </div>
        <div class="card-body">
            <div class="mb-2">
                <label class="me-3">
                    Sub Floor
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][concrete_slab_floors]" value="sub_floor">
                </label>
                <label class="me-3">
                    Ground Floor
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][concrete_slab_floors]" value="ground_floor" checked>
                </label>
                <label class="me-3">
                    1st Floor
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][concrete_slab_floors]" value="first_floor">
                </label>
                <label>
                    N/A
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][concrete_slab_floors]" value="na">
                </label>
            </div>
            <div class="mb-2">
                <p>
                    - Specification: As per detailed engineer’s plans & specs
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][specification]" value="engineers_plans" checked>
                </p>
                <p>
                    - Classification:
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][classification]" value="standard_spec" checked> Standard Specification for up to "M Class"
                    <input type="radio" class="form-check-input ms-3" name="sow[surveyor_set_out][classification]" value="other"> Other:
                    <input type="text" class="form-control d-inline-block w-50 ms-2" name="sow[surveyor_set_out][classification_other_text]" placeholder="Enter other classification">
                </p>
            </div>

            <div class="mb-2">
                Notes to above:
                <input type="text" class="form-control mt-1" name="sow[surveyor_set_out][concrete_slab_notes]" placeholder="..............................................................................">
            </div>
            <small class="d-block"><strong>Note 1:</strong> : Piering if required and /or indicated on engineer's plans will be charged at $110.00 inc.GST & Builders Margin per lineal metre.</small>

        </div>
    </div>
    <!-- Question 2.3 -->
    <!-- Question 2.3 -->
    <div class="card mb-3">
        <div class="card-header">
            <h5>2.3 Electrical</h5>
        </div>
        <div class="card-body">
            <div class="mb-2">
                <label class="me-3">
                    Underground
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][electrical_type]" value="underground" checked>
                </label>
                <label class="me-3">
                    Aerial
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][electrical_type]" value="aerial">
                </label>
                <label>
                    N/A
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][electrical_type]" value="na">
                </label>
            </div>

            <p>- If underground, is entry conduit required to be set in concrete?</p>
            <label class="me-2">
                <input type="radio" class="form-check-input" name="sow[surveyor_set_out][underground_conduit]" value="yes" checked> Yes
            </label>
            <label>
                <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][underground_conduit]" value="no"> No
            </label>
            <small><strong>Note :</strong> For location of sub-board/metre box see electrical plan)</small>

            <p class="mt-2">- Are other electrical conduits required to be set in concrete?</p>
            <label class="me-2">
                <input type="radio" class="form-check-input" name="sow[surveyor_set_out][other_conduits]" value="yes" checked> Yes
            </label>
            <label>
                <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][other_conduits]" value="no"> No
            </label>

            <p class="mt-2">If "Yes", then list:
                <input type="text" class="form-control d-inline-block w-50 ms-2" name="sow[surveyor_set_out][other_conduits]" placeholder="Enter conduit details">
            </p>
            <small><strong>Note :</strong>For location of other electrical conduits see electrical plan</small>
            <div class="d-flex align-items-center">

                <!-- Label and Input -->

                <label for="electrical" class="me-2 mb-0">Notes to above:</label>
                <input type="text" class="form-control form-control-sm w-75 border-0 border-bottom"
                    name="sow[surveyor_set_out][electrical]" id="electrical" placeholder="Enter electrical notes">
            </div>
        </div>
    </div>
</div>




<!-- foundations-and-concreting.blade.php -->

<!-- Section Container -->
<div class="card p-4 my-3">


    <!-- Section 2.4 -->
    <div class="card mb-3">
        <div class="card-header">
            <h5>2.4 Verandah Slab/s</h5>
        </div>
        <div class="card-body">
            <div class="mb-2">
                <label class="me-3">
                    Par Plans & Specifications
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][verandah_specs]" value="plans_and_specs" checked>
                </label>
                <label>
                    N/A
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][verandah_specs]" value="na">
                </label>
            </div>

            <div>
                <p>- Plain concrete standard non-slip cove finish:</p>
                <label class="me-3">
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][verandah_finish]" value="plain_concrete" checked> Or Other
                </label>
                <label>
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][verandah_finish]" value="other">
                </label>

                <p>- If Other:</p>
                <label class="me-3">
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][verandah_other]" value="colour" checked> Colour
                </label>
                <label class="me-3">
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][verandah_other]" value="stencil"> Stencil
                </label>
                <label class="me-3">
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][verandah_other]" value="pattern"> Pattern
                </label>
                <label>
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][verandah_other]" value="exposed_aggregate"> Exposed Aggregate
                </label>

                <p class="mt-2">Notes to above:</p>
                <input type="text" class="form-control" name="sow[surveyor_set_out][verandah_notes]" placeholder="..............................................................................">
            </div>
        </div>
    </div>


    <!-- Section 2.5 -->
    <!-- Section 2.5 -->
    <div class="card mb-3">
        <div class="card-header">
            <h5>2.5 Paths or Driveway</h5>
        </div>
        <div class="card-body">
            <div class="mb-2">
                <label class="me-3">
                    Par Plans & Specifications
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][driveway_specs]" value="plans_and_specs" checked>
                </label>
                <label>
                    N/A
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][driveway_specs]" value="na">
                </label>
            </div>

            <div>
                <p>- Plain concrete standard non-slip cove finish:</p>
                <label class="me-3">
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][driveway_finish]" value="plain_concrete" checked> Or Other
                </label>
                <label>
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][driveway_finish]" value="other">
                </label>

                <p>- If Other:</p>
                <label class="me-3">
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][driveway_other]" value="colour" checked> Colour
                </label>
                <label class="me-3">
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][driveway_other]" value="stencil"> Stencil
                </label>
                <label class="me-3">
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][driveway_other]" value="pattern"> Pattern
                </label>
                <label>
                    <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][driveway_other]" value="exposed_aggregate"> Exposed Aggregate
                </label>

                <p class="mt-2">Notes to above:</p>
                <input type="text" class="form-control" name="sow[surveyor_set_out][driveway_notes]" placeholder="..............................................................................">
            </div>
        </div>
    </div>


    <!-- Section 2.6 -->
    <!-- Section 2.6 -->
    <div class="card mb-3">
        <div class="card-header">
            <h5>2.6 Tank Pads or Other</h5>
        </div>
        <div class="mb-2">
            <label class="me-3">
                Par Plans & Specifications
                <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][tank_pads]" value="plans_and_specs" checked>
            </label>
            <label>
                N/A
                <input type="radio" class="form-check-input ms-1" name="sow[surveyor_set_out][tank_pads]" value="na">
            </label>
        </div>
        <div class="card-body">
            <p>Notes to above:</p>
            <input type="text" class="form-control" name="sow[surveyor_set_out][tank_pads_notes]" placeholder="..............................................................................">
        </div>
    </div>


    <!-- Yellow Note -->
    <div class="alert alert-warning mt-4">
        <strong>Section Note: Foundations & Concreting</strong><br>
        No allowance has been made in the event of rock excavation and the resultant extra construction time. Any rock excavation and extra construction time required will be charged at an hourly rate of builder's cost plus builder's margin and GST. This rate will be inclusive of both labour and equipment hire.
    </div>
</div>