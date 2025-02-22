<template>

    <div class="flex items-center justify-center">
            <div class="w-full max-w-md">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="#" method="post">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Name
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="name"
                               type="text"
                               name="name"
                               v-model="name"
                               placeholder="Name">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="position">
                            Position
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="position"
                               type="text"
                               name="position"
                               v-model="position"
                               placeholder="Position">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="summary">
                            Summary
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                  id="summary"
                                  name="summary"
                                  v-model="summary"
                                  placeholder="Summary"></textarea>
                    </div>


                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="position">
                            Position
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="position"
                               type="text"
                               name="position"
                               v-model="position"
                               placeholder="Position">
                    </div>

                    <hr>

                    <!--Contacts-->
                    <h2>Contacts</h2>


                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="primary_contact">
                            Primary Contact
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="primary_contact"
                               type="text"
                               name="primary_contact"
                               v-model="primary_contact"
                               placeholder="Primary Contact"
                               required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="secondary_contact">
                            Secondary Contact
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="secondary_contact"
                               type="text"
                               name="secondary_contact"
                               v-model="secondary_contact"
                               placeholder="Secondary Contact">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="telephone">
                            Telephone
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="telephone"
                               type="text"
                               name="telephone"
                               v-model="telephone"
                               placeholder="Telephone">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="email"
                               type="email"
                               name="email"
                               v-model="email"
                               placeholder="Email"
                               required>
                    </div>

                    <hr>
                    <h2>Address</h2>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            Address
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="address"
                               type="text"
                               name="address"
                               v-model="address"
                               placeholder="Address"
                               required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="street">
                            Street
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="street"
                               type="text"
                               name="street"
                               v-model="street"
                               placeholder="Street">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                            City
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="city"
                               type="text"
                               name="city"
                               v-model="city"
                               placeholder="City">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="postal_code">
                            Postal Code
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="postal_code"
                               type="text"
                               name="postal_code"
                               v-model="postal_code"
                               placeholder="Postal Code"
                               >
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="country">
                            Country
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="country"
                               type="text"
                               name="country"
                               v-model="country"
                               placeholder="Country"
                               required
                        >
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nationality">
                            Nationality
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="nationality"
                               type="text"
                               name="nationality"
                               v-model="nationality"
                               placeholder="Nationality"
                               required
                        >
                    </div>




                    <hr>
                    <!--Projects-->
                    <h2>Projects</h2>


                    <div class="mb-4" v-for="(project, index) in projects" :key="index">

                        <label class="block text-gray-700 text-sm font-bold mb-2" :for="'project_title_' + index">
                            Project Title {{ index + 1 }}
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               :id="'project_title_' + index"
                               type="text"
                               name="title"
                               v-model="project.title"
                               placeholder="Project Title"
                               required>

                        <label class="block text-gray-700 text-sm font-bold mb-2" :for="'project_description_' + index">
                            Description
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2"
                                  :id="'project_description_' + index"
                                  name="description"
                                  v-model="project.description"
                                  placeholder="Description"
                                  required></textarea>
                        <label class="block text-gray-700 text-sm font-bold mb-2" :for="'project_url_' + index">
                            URL
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2"
                               :id="'project_url_' + index"
                               type="text"
                               name="url"
                               v-model="project.url"
                               placeholder="URL">

                        <button v-if="projects.length > 1"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded mt-2"
                                @click="removeProject(index)">
                            Remove Project
                        </button>

                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                @click="addProject">
                            Add More
                        </button>
                    </div>


                    <hr>
                    <!--Degrees-->
                    <h2>Education</h2>
                    <div class="mb-4" v-for="(degree, index) in degrees" :key="index">

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'degree_title_' + index">
                                Degree {{ index + 1 }}
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'degree_title_' + index"
                                   type="text"
                                   name="title"
                                   v-model="degree.title"
                                   placeholder="Degree"
                                   required>
                        </div>

                        <!-- Institution -->
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'institution_' + index">
                                Institution
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'institution_' + index"
                                   type="text"
                                   name="institution"
                                   v-model="degree.institution"
                                   placeholder="Institution"
                                   required>
                        </div>

                        <!-- Starting Month -->
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'starting_month_' + index">
                                Starting Month
                            </label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    :id="'starting_month_' + index"
                                    name="starting_month"
                                    v-model="degree.starting_month"
                                    required>
                                <option value="" disabled selected>Select Month</option>
                                <option v-for="month in months" :value="month" :key="month">{{ month }}</option>
                            </select>
                        </div>

                        <!-- Starting Year -->
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'starting_year_' + index">
                                Starting Year
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'starting_year_' + index"
                                   type="number"
                                   name="starting_year"
                                   v-model="degree.starting_year"
                                   placeholder="YYYY"
                                   required>
                        </div>

                        <!-- Is Finished Checkbox -->
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2">
                                <input type="checkbox" v-model="degree.is_finished">
                                Completed
                            </label>
                        </div>

                        <!-- Finished Month (shown only if finished) -->
                        <div v-if="degree.is_finished">
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'finished_month_' + index">
                                Finished Month
                            </label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    :id="'finished_month_' + index"
                                    name="finished_month"
                                    v-model="degree.finished_month">
                                <option value="" disabled selected>Select Month</option>
                                <option v-for="month in months" :value="month" :key="month">{{ month }}</option>
                            </select>
                        </div>

                        <!-- Finished Year (shown only if finished) -->
                        <div v-if="degree.is_finished">
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'finished_year_' + index">
                                Finished Year
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'finished_year_' + index"
                                   name="finished_year"
                                   type="number"
                                   v-model="degree.finished_year"
                                   placeholder="YYYY">
                        </div>

                        <!-- Grade -->
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'grade_' + index">
                                Grade
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'grade_' + index"
                                   type="text"
                                   v-model="degree.grade"
                                   placeholder="Grade"
                                   required>
                        </div>

                        <!-- Total Grade -->
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'total_grade_' + index">
                                Total Grade
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'total_grade_' + index"
                                   name="total_grade"
                                   type="text"
                                   v-model="degree.total_grade"
                                   placeholder="Total Grade"
                                   required>
                        </div>

                        <!-- Optional Fields -->
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'department_' + index">
                                Department (Optional)
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'department_' + index"
                                   name="department"
                                   type="text"
                                   v-model="degree.department"
                                   placeholder="Department">
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'board_' + index">
                                Board (Optional)
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'board_' + index"
                                   name="board"
                                   type="text"
                                   v-model="degree.board"
                                   placeholder="Board">
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm f ont-bold mb-2" :for="'duration_' + index">
                                Duration (Optional)
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'duration_' + index"
                                   name="duration"
                                   type="number"
                                   v-model="degree.duration"
                                   placeholder="Duration in years">
                        </div>

                        <button v-if="degrees.length > 1"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded mt-2"
                                @click="removeDegree(index)">
                            Remove
                        </button>
                    </div>

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            @click="addDegree">
                        Add More
                    </button>


                    <hr>
<!--                    Accomplishment-->

                    <h2>Accomplishment</h2>

                    <div class="mb-4" v-for="(accomplishment, index) in accomplishments" :key="index">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'accomplishment_title_' + index">
                                Title
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'accomplishment_title_' + index"
                                   type="text"
                                   v-model="accomplishment.title"
                                   placeholder="Title"
                                   required>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'accomplishment_description' + index">
                                Description
                            </label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                      :id="'accomplishment_description_'+index"
                                      name="description"
                                      placeholder="Description"
                                      v-model="accomplishment.description"
                                      required></textarea>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'starting_year_' + index">
                                Year
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'accomplishment_year_' + index"
                                   type="number"
                                   name="year"
                                   v-model="accomplishment.year"
                                   placeholder="YYYY"
                                   required>
                        </div>

                        <button v-if="accomplishments.length > 1"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded mt-2"
                                @click="removeAccomplishment(index)">
                            Remove
                        </button>


                    </div>


                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            @click="addAccomplishment">
                        Add Accomplishment
                    </button>

                    <!--                    Research-->

                    <h2>Research</h2>

                    <div class="mb-4" v-for="(research, index) in researches" :key="index">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'research_title_' + index">
                                Title {{index + 1}}
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'research_title_' + index"
                                   name="title"
                                   type="text"
                                   v-model="research.title"
                                   placeholder="Title"
                                   required>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'research_description' + index">
                                Description
                            </label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                      :id="'research_description_'+index"
                                      name="description"
                                      placeholder="Description"
                                      v-model="research.description"
                                      required></textarea>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'research_published_month_' + index">
                                Published Month
                            </label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    :id="'research_published_month_' + index"
                                    name="published_month"
                                    v-model="research.published_month"
                                    required>
                                <option value="" disabled selected>Select Month</option>
                                <option v-for="month in months" :value="month" :key="month">{{ month }}</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'research_published_year_' + index">
                                Year
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'research_published_year_' + index"
                                   type="number"
                                   name="year"
                                   v-model="research.year"
                                   placeholder="YYYY"
                                   required>
                        </div>

                        <button v-if="researches.length > 1"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded mt-2"
                                @click="removeResearch(index)">
                            Remove
                        </button>


                    </div>


                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            @click="addResearch">
                        Add Research
                    </button>

<!--                    Skills-->

                    <h2>Skills</h2>

                    <div class="mb-4" v-for="(skill, index) in skills" :key="index">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'skill_name' + index">
                                Skill Name {{index + 1}}
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'skill_name' + index"
                                   name="skill_name"
                                   type="text"
                                   v-model="skill.skill_name"
                                   placeholder="Skill Name"
                                   required>
                        </div>

                        <button v-if="skills.length > 1"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded mt-2"
                                @click="removeSkill(index)">
                            Remove
                        </button>


                    </div>


                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            @click="addSkill">
                        Add Skill
                    </button>

<!--                    Social Media-->


                    <h2>Social Media</h2>

                    <div class="mb-4" v-for="(social_med, index) in social_media" :key="index">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'social_media_title' + index">
                                Social Media Name {{index + 1}}
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'social_media_title' + index"
                                   name="title"
                                   type="text"
                                   v-model="social_med.title"
                                   placeholder="Social Media Name"
                                   required>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'social_media_url' + index">
                                URL
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'social_media_url' + index"
                                   name="url"
                                   type="text"
                                   v-model="social_med.url"
                                   placeholder="URL"
                                   required>
                        </div>

                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" :for="'social_media_icon' + index">
                                Upload Icon
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                   :id="'social_media_icon' + index"
                                   name="icon"
                                   type="file"
                                   @change="handleFileUpload($event, index)"
                                   accept="image/*" />
                        </div>
                        <button v-if="social_media.length > 1"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded mt-2"
                                @click="removeSocialMedia(index)">
                            Remove
                        </button>


                    </div>


                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            @click="addSocialMedia">
                        Add Social Media
                    </button>
                    <div class="flex items-center mt-4 justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
    </div>

</template>


<script>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

export default {
    data() {
        return {
            projects: [
                { title: '', description: '', url: '' }
            ],
            months: [
                'January', 'February', 'March', 'April', 'May', 'June', 'July',
                'August', 'September', 'October', 'November', 'December'
            ],
            degrees: [{
                title: '',
                starting_year: '',
                starting_month: '',
                finished_year: '',
                finished_month: '',
                is_finished: false,
                institution: '',
                department: '',
                board: '',
                duration: '',
                grade: '',
                total_grade: ''
            }],

            accomplishments:[{
                title: '',
                description: '',
                year:''
            }],

            researches:[{
                title:'',
                description:'',
                published_month:'',
                published_year:'',
            }],

            skills:[{
                skill_name:'',
            }],

            social_media:[{
                title:'',
                url: '',
                icon:'',
            }]
        };
    },
    methods: {
        addProject() {
            this.projects.push({ title: '', description: '', url: '' });
        },

        removeProject(index){
            this.projects.splice(index, 1);
        },

        addDegree(){
            this.degrees.push({
                title:'',starting_year:'',finished_year:'',finished_month:'',
                is_finished:false, institution:'',department:'',board:'',
                duration:'',grade:'',total_grade:''
            })
        },

        removeDegree(index) {
            this.degrees.splice(index, 1);
        },

        addAccomplishment(){
          this.accomplishments.push({
              title:'',starting_year:'',finished_year:'',finished_month:'',
          });
        },

        removeAccomplishment(index) {
            this.accomplishments.splice(index, 1);
        },

        addResearch(){
            this.researches.push({
                title:'',description:'',published_month:'',published_year:'',
            })
        },

        removeResearch(index){
            this.researches.splice(index, 1);
        },

        addSkill(){
            this.skills.push({
                skill_name:'',
            })
        },

        removeSkill(index){
            this.skills.splice(index, 1);
        },

        addSocialMedia(){
          this.social_media.push({
              title:'', url:'', icon:'',
          })
        },

        removeSocialMedia(index){
            this.social_media.splice(index, 1);
        },

        handleFileUpload(event, index) {
            const file = event.target.files[0];
            if (file) {
                this.social_media[index].icon = file.name;
            }
        },
        handleSubmit() {
            console.log(this.projects);
        }
    }
};
</script>
