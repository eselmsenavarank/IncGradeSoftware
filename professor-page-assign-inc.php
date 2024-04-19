<!DOCTYPE html>
<html lang="en"
  ><head
    ><title>Professor-Page-Assign-INC - INC2</title
    ><meta
      property="og:title"
      content="Professor-Page-Assign-INC - INC2"
    /><meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    /><meta charset="utf-8" /><meta
      property="twitter:card"
      content="summary_large_image"
    /><style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }</style
    ><style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }</style
    ><link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    /><link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    /><link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    /><link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    /><link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
    <style>
      [data-thq="thq-dropdown"]:hover > [data-thq="thq-dropdown-list"] {
          display: flex;
        }

        [data-thq="thq-dropdown"]:hover > div [data-thq="thq-dropdown-arrow"] {
          transform: rotate(90deg);
        }
    </style></head
  ><body
    ><link rel="stylesheet" href="./style.css" /><div>
      <link href="./professor-page-assign-inc.css" rel="stylesheet" /><div
        class="professor-page-assign-inc-container"
        >
        <form class="professor-page-assign-inc-assign-inc" action="action-assign-student.php" method="post">
          <div class="professor-page-assign-inc-container1"
            ><div class="professor-page-assign-inc-container2"
              ><span class="professor-page-assign-inc-text">| Class</span
              ><select
                name="class"
                required="true"
                class="professor-page-assign-inc-classes"
                ><option value="Option 1">Select a class</option
                ><option value="Option 2">CSC211</option
                ><option value="Option 3">ECO230</option></select>
              <span class="professor-page-assign-inc-text01">| Owned Work</span
              ><input
                type="text"
                name="ownedWork"
                required="true"
                placeholder="Owned Work"
                class="professor-page-assign-inc-owned-work input" />
                <span
                class="professor-page-assign-inc-text02"
                >| Due Date</span
              ><input
                type="date"
                name="dueDate"
                required="true"
                placeholder="placeholder"
                class="professor-page-assign-inc-due-date input" />

                <span class="professor-page-assign-inc-text01">| Email</span
              ><input
                type="text"
                name="email"
                required="true"
                placeholder="Owned Work"
                class="professor-page-assign-inc-owned-work input" />
              </div>

            <div class="professor-page-assign-inc-container3"
              ><span class="professor-page-assign-inc-name">| Name</span
              ><input
                type="text"
                name="f_name"
                required="true"
                placeholder="Name"
                class="professor-page-assign-inc-name1 input" /><span
                class="professor-page-assign-inc-surname"
                >| Surname</span
              ><input
                type="text"
                name="l_name"
                required="true"
                placeholder="Surname"
                class="professor-page-assign-inc-surname1 input" /><span
                class="professor-page-assign-inc-text03"
                >| BMCC ID</span>
                <input
                type="text"
                name="id"
                required="true"
                placeholder="BMCC ID"
                class="professor-page-assign-inc-bmc-ci-d input" />
                <span class="professor-page-assign-inc-text" >| Semester</span>
                <select
                name="semester"
                required="true"
                class="professor-page-assign-inc-classes"
                ><option value="Option 1">Select a semester</option
                ><option value="Option 2">Spring 2024</option
                ><option value="Option 3">Fall 2023</option>
              </select>
              </div>
                
            <button 
            type="submit" 
            class="professor-page-assign-inc-button button">Submit</button>
          </div>
        </form>
        <div class="professor-page-assign-inc-menu"
          ><img
            alt="image"
            src="public/external/bmcc_logo-200h.png"
            class="professor-page-assign-inc-image"
          /><div class="professor-page-assign-inc-container4"
            ><nav class="professor-page-assign-inc-nav-above"
              ><svg
                viewBox="0 0 1024 1024"
                class="professor-page-assign-inc-icon"
              >
                <path d="M448 128l128 128h448v704h-1024v-832z"></path></svg>
              <span class="professor-page-assign-inc-dashboard"><a href="professor-page-your-students.php">Dashboard</a></span
              ><svg
                viewBox="0 0 1024 1024"
                class="professor-page-assign-inc-icon02"
              >
                <path
                  d="M854 342v-86l-342 214-342-214v86l342 212zM854 170q34 0 59 26t25 60v512q0 34-25 60t-59 26h-684q-34 0-59-26t-25-60v-512q0-34 25-60t59-26h684z"
                ></path></svg>
              <span class="professor-page-assign-inc-contact"
                ><a href="chat.php">Contact w/Students</a></span
              ><svg
                viewBox="0 0 1024 1024"
                class="professor-page-assign-inc-icon04"
              >
                <path
                  d="M896 128v832h-672c-53.026 0-96-42.98-96-96s42.974-96 96-96h608v-768h-640c-70.398 0-128 57.6-128 128v768c0 70.4 57.602 128 128 128h768v-896h-64z"
                ></path>
                <path
                  d="M224.056 832v0c-0.018 0.002-0.038 0-0.056 0-17.672 0-32 14.326-32 32s14.328 32 32 32c0.018 0 0.038-0.002 0.056-0.002v0.002h607.89v-64h-607.89z"
                ></path></svg>
              <span class="professor-page-assign-inc-submit"
                ><a href="professor-page-assign-inc.php">Assign INC</a></span
              ></nav
            ><nav class="professor-page-assign-inc-nav-below"
              ><span class="professor-page-assign-inc-text07">Settings</span
              ><svg
                viewBox="0 0 1024 1024"
                class="professor-page-assign-inc-icon07"
              >
                <path
                  d="M512 662q62 0 106-44t44-106-44-106-106-44-106 44-44 106 44 106 106 44zM830 554l90 70q14 10 4 28l-86 148q-8 14-26 8l-106-42q-42 30-72 42l-16 112q-4 18-20 18h-172q-16 0-20-18l-16-112q-38-16-72-42l-106 42q-18 6-26-8l-86-148q-10-18 4-28l90-70q-2-14-2-42t2-42l-90-70q-14-10-4-28l86-148q8-14 26-8l106 42q42-30 72-42l16-112q4-18 20-18h172q16 0 20 18l16 112q38 16 72 42l106-42q18-6 26 8l86 148q10 18-4 28l-90 70q2 14 2 42t-2 42z"
                ></path></svg>
              <svg
                viewBox="0 0 634.88 1024"
                class="professor-page-assign-inc-icon09"
              >
                <path
                  d="M402.286 717.714v137.143c0 12.571-10.286 22.857-22.857 22.857h-137.143c-12.571 0-22.857-10.286-22.857-22.857v-137.143c0-12.571 10.286-22.857 22.857-22.857h137.143c12.571 0 22.857 10.286 22.857 22.857zM582.857 374.857c0 108.571-73.714 150.286-128 180.571-33.714 19.429-54.857 58.857-54.857 75.429v0c0 12.571-9.714 27.429-22.857 27.429h-137.143c-12.571 0-20.571-19.429-20.571-32v-25.714c0-69.143 68.571-128.571 118.857-151.429 44-20 62.286-38.857 62.286-75.429 0-32-41.714-60.571-88-60.571-25.714 0-49.143 8-61.714 16.571-13.714 9.714-27.429 23.429-61.143 65.714-4.571 5.714-11.429 9.143-17.714 9.143-5.143 0-9.714-1.714-14.286-4.571l-93.714-71.429c-9.714-7.429-12-20-5.714-30.286 61.714-102.286 148.571-152 265.143-152 122.286 0 259.429 97.714 259.429 228.571z"
                ></path></svg>
              <span class="professor-page-assign-inc-text08"
                >FAQ&nbsp;&nbsp;</span
              ></nav
            ></div
          ><div class="professor-page-assign-inc-profile"
            ><img
              alt="image"
              src="https://images.unsplash.com/photo-1562159278-1253a58da141?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDIyfHxtYW4lMjBwb3J0dHJhaXR8ZW58MHx8fHwxNjI3MjkzNTM1&amp;ixlib=rb-1.2.1&amp;w=200"
              class="professor-page-assign-inc-user-pic"
            /><div class="professor-page-assign-inc-info"
              ><span class="professor-page-assign-inc-text09">John Doe</span
              ><span class="professor-page-assign-inc-text10"
                >View Profile</span
              ></div
            ><div class="professor-page-assign-inc-logout"
              ><span class="professor-page-assign-inc-text11"
                ><a href="login-page.php">Log out</a></span
              ></div
            ></div
          ></div
        ><h1 class="professor-page-assign-inc-assign"><a href = "professor-page-assign-inc.php">Assign INC</a></h1
        ><header data-role="Header" class="professor-page-assign-inc-header"
          ><nav class="navigation-links1-nav navigation-links1-root-class-name9"
            ><span class="navigation-links1-text"
              ><span>Your Students</span></span
            ><span class="navigation-links1-text1"
              ><span>Assign INC</span></span
            ></nav
          ></header
        ></div
      ></div
    >
    <script
      defer=""
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script></body
></html>
