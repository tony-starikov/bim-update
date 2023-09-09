<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'id' => 1,
                'title_en' => 'What is BIM?',
                'slug' => 'what-is-bim',
                'image' => 'posts/9lXeNk1GiVI7o80DmgY4ytFAVTeqxUYe1mqWjvu8.jpg',
                'bg_image' => 'posts/cqW0JTyHsnYME7mvyFCLvzwOGSDYFjNGiJdWADd2.jpg',
                'date' => '07. 21. 2023',
                'show_status' => 1,
                'recommend' => 0,
                'content' => '<p>&nbsp;</p><p><span lang="ru-UA">Building Information Modeling (BIM) is revolutionizing the construction industry by changing the way buildings are designed, built and maintained. This quick guide provides insight into what BIM is, how it&nbsp;</span><span lang="ru-UA">works, and why it is important to manufacturers and designers alike.<br><br></span></p><h2><span style="font-size: 18pt;"><strong><span lang="ru-UA">THE DIGITAL REVOLUTION IS IN THE MAKING</span></strong></span></h2><p><span lang="ru-UA"><br></span><span lang="ru-UA">BIM began more than a decade ago, and today there are millions of active BIM users around the world. But what led to the upgrade of traditional drawings to BIM technology? </span><span lang="ru-UA">In the 1980s, construction design moved from manual drafting to computer-aided design - CAD. The popularization of computers made it easier to manage drawings and improved the visualization process. However, these drawings were still predominantly visual representations, making it difficult to collaborate and share information about the construction project. BIM technology solved this problem and began the information age in the construction industry.<br><br></span></p><h2><span style="font-size: 18pt;"><strong><span lang="ru-UA">BIM IN CONSTRUCTION</span></strong></span></h2><p><span lang="ru-UA"><br>BIM technology tools are used to create a complete, finished 3D model of a building using programs such as Revit (Autodesk), MicroStation (Bentley), Graphisoft Archicad, Allplan and Vectorworks (Nemetschek Group). </span><span lang="ru-UA">BIM involves more than just modeling and visualization. It is a procedure that creates a common data model that is available to all project stakeholders, from building designers to construction firms and, ultimately, property owners and managers. These models can also include detailed information about a building\'s life cycle and maintenance needs. Including information such as time planning (4D), cost estimates (5D), and sustainability (6D) gives BIM models additional dimensions.<br><br></span></p><h2><span style="font-size: 18pt;"><strong><span lang="ru-UA">BIM CONTENT</span></strong></span></h2><p><span lang="ru-UA"><br>There is a growing demand for manufacturer-specific BIM content that includes not only the physical properties of products but also important data such as product information, installation instructions, energy consumption, environmental labels, operating costs, and product life cycle.<br><br></span></p><p><span lang="ru-UA">The need for manufacturer-specific BIM content is constantly growing. This content covers not only the physical properties of products but also important data such as installation instructions, product information, energy consumption, environmental labels, operating costs, and product life cycle.</span></p><p><span lang="ru-UA"><br>We should also note the progress in laser scanning and point cloud modeling, a technology that makes it possible to create a digital model of almost any scanned object.</span></p><p>&nbsp;</p><p><span lang="ru-UA">At "BIMprove LLC", we leverage the power of BIM technology to provide services in this area. </span><span lang="ru-UA"><a href="https://www.letsbim.com.ua/#services" target="_blank" rel="noopener">You can see all of our services on this page.</a></span></p>',
                'created_at' => '2023-09-04 14:52:41',
                'updated_at' => '2023-09-08 10:28:35',
            ],
            [
                'id' => 2,
                'title_en' => 'Architecture in Revit by Point Cloud',
                'slug' => 'architecture-in-revit-by-point-cloud',
                'image' => 'posts/VBgWsWgldl6RRvm6DXRoVFcQmmHGqZ8u6mHD9E9V.jpg',
                'bg_image' => 'posts/VhFnDRgHDLDHW8jk0Te4BN4e2IY22E4zcvbIHC8u.jpg',
                'date' => '08. 05. 2023',
                'show_status' => 1,
                'recommend' => 0,
                'content' => '<p style="text-align: justify;">&nbsp;</p><p style="text-align: justify;"><span style="font-size: 12pt;">The basis of the house is the foundation, everyone knows it. But what about the walls, the roof, because without them there will be no house. Today we will talk about this, namely about the architecture discipline and features of modeling its components by point cloud.</span></p><p style="text-align: justify;">&nbsp;</p><h1 style="text-align: justify;"><strong><span style="font-size: 18pt;">What are the components of the architecture discipline in Revit? </span></strong></h1><p style="text-align: justify;"><span style="font-size: 12pt;">First of all, it`s WALL. What do we know about walls in Revit? It has its own height and thickness, you can make layers if necessary and it\'s always vertical. It is the latter property that sometimes causes problems when modeling with a point cloud. Because cloud modeling is very different from modeling by drawings. On the drawing, you will never see a wall with a slope, as it can be on a point cloud.&nbsp;</span></p><p style="text-align: justify;"><span style="font-size: 12pt;">For different cases, you can choose options for working with uneven:</span></p><ul style="text-align: justify;"><li><span style="font-size: 12pt;">You can make a wall using the &ldquo;Model in Place&rdquo; tool and create a wall with Sweep;</span></li><li><span style="font-size: 12pt;">Use the &ldquo;Sweep&rdquo; or &ldquo;Reveal&rdquo; tool. With these tools, you can create various wall curves, but for this, you will need to create your own profile;</span></li><li><span style="font-size: 12pt;">The &ldquo;Split Element&rdquo; tool can horizontally divide the wall into parts;</span></li><li><span style="font-size: 12pt;">With the &ldquo;Wall by Face&rdquo; tool you can create walls using the </span><span style="font-size: 12pt;">faces of a mass or generic model.</span></li></ul><p style="text-align: justify;"><span style="font-size: 12pt;"><img src="/images/photos/shares/wall.jpg" alt="wall" width="407" height="239"></span></p><p style="text-align: justify;"><span style="font-size: 12pt;">Which option to choose is up to you, but it is better to ask Teamlead or Project Manager.</span></p><p style="text-align: justify;">&nbsp;</p><h2 style="text-align: justify;"><strong><span style="font-size: 18pt;">Components related to the wall are WINDOWS and DOORS.&nbsp;</span></strong></h2><p style="text-align: justify;">Quite clear and simple tools, but some questions may arise when modeling with the point cloud. The sizes of these elements are determined by the boundaries visible on the point cloud. All components (cornices, quarters, frame, sill) must be checked on each element separately because according to the point cloud, all windows/doors are different.&nbsp;</p><p style="text-align: justify;">The point cloud does not show which way a door or window should open, but in many cases, it is possible to see this element in motion (especially for doors) by shooting the cloud from different points. Or by the position of surrounding elements, constructive logic.&nbsp;</p><p style="text-align: justify;">In practice, we use standard families of doors/windows from templates and make different types for them. But there are projects where you need to make your own families of doors/windows for a specific point cloud. You need to be prepared for this, as "BIMProve" modelers, who can make any Revit family.</p><p style="text-align: justify;">&nbsp;</p><h2 style="text-align: justify;"><strong><span style="font-size: 18pt;">The elements that are added after the walls are the CEILING and FLOOR. </span></strong></h2><p style="text-align: justify;">On the point cloud, most of them have slopes and irregularities, especially the floor. Therefore, in the sections, it is necessary to pay attention to the deviation of the floor/ceiling from the point cloud. In order to align the elements with the point cloud we use &ldquo;Sub Elements".</p><p style="text-align: justify;"><span style="font-size: 12pt;"><img style="display: block; margin-left: auto; margin-right: auto;" src="/images/photos/shares/floor.jpg" alt="" width="861" height="285"></span></p><p style="text-align: justify;">&nbsp;</p><h2 style="text-align: justify;"><span style="font-size: 18pt;"><strong>Another example of architecture in Revit is STAIRS.&nbsp;</strong></span></h2><p style="text-align: justify;">Nothing is perfect in our life, so the stairs cannot be perfect on a point cloud. The type of stairs should be determined by the point cloud (Assembled stair, Cast-in-place stair or Precast stair).&nbsp;</p><p style="text-align: justify;">Pay attention to all the details of the stairs (steps, their number, stinger, riser, tread). How the railing will look in the model depends on the LOD of the project. But in any case, the handrail should be by a point cloud. The shape of the handrail and balusters depends on the LOD. There are cases when the &ldquo;Model in Place&rdquo; may be needed when modeling stairs. Such cases are discussed with Project Manager or Customer.<br><br></p><h2 style="text-align: justify;"><span style="font-size: 18pt;">H<strong>ow to protect the building from precipitation, of course, with the help of the ROOF.</strong></span></h2><p style="text-align: justify;">And that is our next component. During the existence of "BIMProve," our modelers have made a large number of different roofs. Here are some of their policies:</p><table style="border-collapse: collapse; width: 100%; border-width: 0px;" border="1"><colgroup><col style="width: 9.36864%;"><col style="width: 31.4325%;"><col style="width: 53.63%;"><col style="width: 5.56894%;"></colgroup><tbody><tr><td style="border-width: 0px;">&nbsp;</td><td style="border-width: 0px;"><img src="/images/photos/shares/wall_in_building.jpg" alt="" width="440" height="280"></td><td style="border-width: 0px;"><ul><li>For modeling by point cloud, we use a Basic Roof with the thickness by point cloud or most suitable for each type of building for structural reasons;</li><li>The roof should be solid, not in parts;</li><li>The roof is aligned by the point cloud after the walls/columns are attached to it.</li></ul></td><td style="border-width: 0px;">&nbsp;</td></tr></tbody></table><p style="text-align: justify;">&nbsp;</p><table style="border-collapse: collapse; width: 100%; border-width: 0px;" border="1"><colgroup><col style="width: 55.9701%;"><col style="width: 44.0299%;"></colgroup><tbody><tr><td style="border-width: 0px;">As you have noticed, in many cases you can use the &ldquo;Model in Place&rdquo; tool. Some architectural forms on the point cloud can be made only with this tool. After using this tool, be sure to transfer the element to the Revit family. To simplify this operation, "BIMProve" has created a special plugin &ldquo;Convert to Family&rdquo;.</td><td style="border-width: 0px;"><img src="/images/photos/shares/fountain.jpg" alt="" width="293" height="262"></td></tr></tbody></table><p style="text-align: justify;">&nbsp;</p><p style="text-align: justify;">&nbsp;</p>',
                'created_at' => '2023-09-04 15:29:04',
                'updated_at' => '2023-09-04 15:34:30',
            ],
            [
                'id' => 3,
                'title_en' => 'How the work on the Point cloud in Revit is going on',
                'slug' => 'how-the-work-on-the-point-cloud-in-revit-is-going-on',
                'image' => 'posts/jMDxnW0Hr4hvYNw8v4kppmVv7uFxtmySUFfwTXyI.jpg',
                'bg_image' => 'posts/qiV4cEPnteCImRLQaDTreKIyqpOdGTfO9fCw1kps.jpg',
                'date' => '08. 15. 2023',
                'show_status' => 1,
                'recommend' => 0,
                'content' => '<p style="text-align: justify;">&nbsp;</p><h2 style="text-align: justify;"><strong><span style="font-size: 18pt;">OPTIONS FOR WORKING IN REVIT</span></strong></h2><p style="text-align: justify;">Point cloud projects are mostly done by a team of specialists, so there are several options for work:<br>Revit server. You need to create worksets for users and make sure that everyone works in their own set. To prevent the displacement of the cloud points from the initial coordinates, it is necessary to delete the cloud each time before synchronization with the central model, and then reload it again.<br>BIM 360 account. Each user has his own profile, so there is no need to create worksets. There is also no need to unload the cloud before synchronization.</p><p style="text-align: justify;">&nbsp;</p><h2 style="text-align: justify;"><strong><span style="font-size: 18pt;">BEGINNING OF WORK</span></strong></h2><p style="text-align: justify;">Work on the point cloud in Revit takes place in certain templates. In most cases, the customer provides a template already configured for a specific 9oint cloud. In such a template, the MEP systems are already configured, and all the necessary sizes of architectural and structural elements.<br>In all cases, except as agreed with the customer, it is recommended to load the cloud into the project at common coordinates (Auto &gt; By Shared Coordinates). Next, you need to divide the model into levels, if they were not in the the project.<br><br>Before you start working in the Revit model, you need to perform the following actions:</p><ul style="text-align: justify;"><li>Go to the "Manage Links" window and check the location of the point cloud on your computer;</li><li>Check your workset or profile, if using Bima 60;</li><li>Make sure that the cloud is pinned (Pin) and has the "Existing" stage;</li><li>Disable movement of pinned and linked objects;</li><li>Create new views and sections for work by copying existing ones but adding your initials.<br><br></li></ul><h2 style="text-align: justify;"><strong><span style="font-size: 18pt;">A FEW TIPS TO SIMPLIFY YOUR WORK</span></strong></h2><ol style="text-align: justify;"><li>It is better to work with two monitors so that 2 previously created sections can be displayed on a second monitor. This makes it possible to better control the position of the elements.</li><li>On the quick access tab, you need to add buttons responsible for turning on and off the point cloud on a particular view and also a button to switch the cloud to the Normal visibility mode for a particular view.</li><li>Hot keys, which can be added to your needs, and your modeling style.</li></ol><p style="text-align: justify;">&nbsp;</p><h2 style="text-align: justify;"><strong><span style="font-size: 18pt;">SEQUENCE OF MODELING IN REVIT</span></strong></h2><ul style="text-align: justify;"><li>First of all, modeling of elements that are attached to the roof or floor (walls, columns). In turn, walls should not intersect with each other and other elements, &nbsp;for this there is a tool "Join/Unjoin";</li><li>Columns often serve as loadbearing structures, so they are created using the "Structural column" tool;</li><li>The floor is made with the "Floors" tool, sketching along the outer borders of the walls. After that, using the "Attach Top/Base" tool, align the walls, and columns with the floor, so that when changing the floor, the walls/columns move with it;</li><li>We make the slab along the inner boundaries of the walls. It is necessary to take into account all existing slopes. Interfloor floors must be leveled on the inner surface relative to the cloud points, and mezzanine floors on the lower surface.</li><li>Stained glass is modeled taking into account the panels on the point cloud, you also need to use the profile of the required section;</li><li>Door s/Windows must be made as accurately as possible in width and height of the opening;</li><li>When modeling beams, you must start with the main beams, &nbsp;and then move on to the beam\'s flooring. You also need to pay attention to the material of &nbsp;the &nbsp;beams, because it depends on docking with columns;</li><li>Stairs are modeled with a special tool, the number of steps must coincide with their number in the cloud;</li><li>The railing also has its own tool. The top of the handrail must coincide with the cloud, also Depending on the LOD, it is necessary to observe the coincidence &nbsp;of &nbsp;vertical elements on the Point cloud;</li><li>All elements that can be attached to a separate level should be attached (columns, walls, etc.);</li><li>It is better to make the ceiling separately for each room if another option is not agreed upon with the customer;</li><li>The roof is made in one piece, after which the walls/columns are attached to it using the "Attach Top/Base" tool. After that, the roof is aligned with the point cloud;</li><li>When all this is done, you can model the internal elements of the model.</li></ul><p style="text-align: justify;">&nbsp;</p><h2 style="text-align: justify;"><strong><span style="font-size: 18pt;">DETAILING &nbsp;WHEN &nbsp;MODELING &nbsp;IN REVIT</span></strong></h2><p style="text-align: justify;">When ordering a project, the customer always specifies the level of development of the information model LOD. LOD (Level of Detail) in BIM is a standard that defines the requirements for 3D geometry. Sometimes customers have their own internal standard of detailing that they must provide.</p><p style="text-align: justify;"><strong>4 levels of LOD:</strong></p><p style="text-align: justify;">LOD 100 - model in the form of volumetric forming elements with approximate dimensions and shape.</p><p style="text-align: justify;">LOD 200 - the model is presented as an object, more like a building, with approximate size and shape. It already displays window and door openings, railings by height on a point cloud.</p><p style="text-align: justify;">LOD 300 - model with exact dimensions and shape. Door s/Windows with frames, panels, and railings completely behind the point cloud. The model can be used to prepare project documentation.</p><p style="text-align: justify;">LOD 400 - the model is presented with detailed dimensions and shape. All elements must be made according to the point cloud.</p><p style="text-align: justify;">&nbsp;</p><h2 style="text-align: justify;"><strong><span style="font-size: 18pt;">FINAL STAGE OF MODELING</span></strong></h2><p style="text-align: justify;">Once the project is done, it needs to be checked thoroughly. Programs for checking: Revit, Navisworks Manage.&nbsp;<br>The quality of the check depends on the final look of the project, the number of edits from the customer, and the rating of your service.</p><p style="text-align: justify;">Checking in Revit is performed using the same sections and views as in modeling. But the check is aimed at finding missing elements, and inconsistencies with the point cloud. Each level is checked in section, all plans and ceiling plans are also checked (small elements such as sensors are especially noticeable on them). Worksets are also checked, it is better to check them in 3D view through the worksets color display menu.</p>',
                'created_at' => '2023-09-04 16:09:28',
                'updated_at' => '2023-09-04 16:22:53',
            ],
        ]);
    }
}
