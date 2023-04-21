<template>
  <b-form class="mt-3">
    <b-row>
      <b-row>
        <h4 class="text-secondary">Contact Details</h4>
      </b-row>
      <b-col cols="6">
        <b-form-group id="first-name" label="First Name" label-for="first-name">
          <b-form-input
            id="first-name"
            type="text"
            placeholder="First Name"
            v-model="customer.contact_firstname"
          ></b-form-input>
        </b-form-group>
      </b-col>
      <b-col cols="6">
        <b-form-group id="last-name" label="Last Name" label-for="last-name">
          <b-form-input
            id="last-name"
            type="text"
            placeholder="Last Name"
            v-model="customer.contact_lastname"
          ></b-form-input>
        </b-form-group>
      </b-col>
    </b-row>
    <b-row class="mt-3">
      <b-col cols="6">
        <b-form-group id="email" label="E-Mail" label-for="email">
          <b-form-input
            id="email"
            type="email"
            placeholder="example@crm.com"
            v-model="customer.contact_email"
          ></b-form-input>
        </b-form-group>
      </b-col>
    </b-row>
    <b-row class="mt-5">
      <h4 class="text-secondary">Company Details</h4>
    </b-row>
    <b-row>
      <b-col cols="4">
        <b-form-group
          id="company_name"
          label="Company Name"
          label-for="company_name"
        >
          <b-form-input
            id="company_name"
            type="text"
            placeholder="XYZ Industries"
            v-model="customer.company_name"
          ></b-form-input>
        </b-form-group>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="4">
        <b-form-group
          id="acquired_on"
          label="Acquired On"
          label-for="acquired_on"
        >
          <b-form-input
            id="acquired_on"
            type="date"
            v-model="customer.acquired_on"
          ></b-form-input>
        </b-form-group>
      </b-col>
    </b-row>
    <b-row class="mt-2">
      <b-form-checkbox
        id="customer_status"
        v-model="customer.customer_status"
        name="customer-status"
        value="active"
        unchecked-value="inactive"
      >
        Customer is active
      </b-form-checkbox>
    </b-row>
    <b-row class="mt-4">
      <b-col cols="3">
        <b-button variant="primary" class="px-5" @click="addNewCustomer"
          >Add Customer</b-button
        >
      </b-col>
      <b-col>
        <b-button variant="warning" @click="triggerClose">Close</b-button>
      </b-col>
    </b-row>
  </b-form>
</template>

<script>
import axios from "axios";

export default {
  name: "CreateCustomerModal",
  data() {
    return {
      customer: {},
    };
  },
  methods: {
    triggerClose() {
      this.$emit("closeCreateModal");
    },
    addNewCustomer() {
      axios
        .post("http://127.0.0.1:8000/api/tasks/", this.customer)
        .then((response) => {
          console.log(response.data);
          this.$emit("closeCreateModal");
          this.$emit("reloadDataTable");
          this.$emit("showSuccessAlert");
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
