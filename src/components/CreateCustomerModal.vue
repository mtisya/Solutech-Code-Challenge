<!-- Modal for adding new customers -->
    <!-- Modal for adding new customers -->
    <b-modal
      ref="create-customer-modal"
      size="xl"
      hide-footer
      title="New Customer"
    >
      <create-customer-form
        @closeCreateModal="closeCreateModal"
        @reloadDataTable="getCustomerData"
        @showSuccessAlert="showAlertCreate"
      ></create-customer-form>
    </b-modal>

    <!-- Modal for updating customers -->
    <b-modal
      ref="edit-customer-modal"
      size="xl"
      hide-footer
      title="Edit Customer"
    >
      <edit-customer-form
        @closeEditModal="closeEditModal"
        @reloadDataTable="getCustomerData"
        @showSuccessAlert="showAlertUpdate"
        :customerId="customerId"
      ></edit-customer-form>
    </b-modal>

<!-- Delete Customer Modal -->
    <b-modal
      ref="delete-customer-modal"
      size="md"
      hide-footer
      title="Confirm Deletion"
    >
      <delete-customer-modal
        @closeDeleteModal="closeDeleteModal"
        @reloadDataTable="getCustomerData"
        @showDeleteAlert="showDeleteSuccessModal"
        :customerId="customerId"
      ></delete-customer-modal>
    </b-modal>