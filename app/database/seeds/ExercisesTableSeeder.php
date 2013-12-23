<?php

class ExercisesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('exercises')->truncate();

	$exercises= [
		[
			"name" => "Wall Pushups",
			"description" => "Face a wall. With your feet together, place your palms flat against the wall. This is the start position (fig. 1). Your arms should be straight and shoulder width apart, with the hands at chest level. Bend the shoulders and elbows until the forehead gently touches the wall. This is the finish position (fig. 2). Press back to the start position and repeat.",
			"level" => 1,
			"beginner" => "1 set of 10",
			"intermediate" => "2 sets of 25",
			"progression" => "3 sets of 50",
		],
		[
			"name" => "Incline Pushups",
			"description" => "To do this exercise you will need to find a secure object or piece of furniture which is about half your height—it should reach the midpoint of your body (roughly around the level of the hips). Good options might be desks, tall chairs, work surfaces, kitchen tops, low walls or solid fences. In most prisons, I’ve found that the cell basin fits the bill nicely—but make sure it’s strong enough to accommodate the demands of the exercise. With your feet together and your body aligned, lean over and grasp the object with the arms straight and shoulder width apart. This is the start position of the exercise and—if the object reaches your midpoint—should put you at about 45 degrees from the floor (see fig. 3). Bending at the elbows and shoulders, lower yourself until your torso gently touches the top of the object (fig. 4). Pause briefly before pressing back up to the start position, and repeat.",
			"level" => 2,
			"beginner" => "1 set of 10",
			"intermediate" => "2 sets of 20",
			"progression" => "3 sets of 40",
		],
		[
			"name" => "Kneeling Pushups",
			"description" => "Kneel on the floor with your feet together, and your palms flat on the ground in front of you. The arms should be straight, shoulder width apart, and in line with your chest. Link one ankle around the other, and keep the hips straight and in alignment with the trunk and head. This is the start position (fig. 5). Using the knees as a pivot, bend at the shoulders and elbows until your chest is approximately one fist’s width from the floor (fig. 6). Pause and press back to the start position, then repeat.",
			"level" => 3,
			"beginner" => "1 set of 10",
			"intermediate" => "2 sets of 15",
			"progression" => "3 sets of 30",
		],
		[
			"name" => "Half Pushups",
			"description" => "From the kneeling position, place your palms on the floor and stretch your legs out behind you. Your hands should be shoulder width apart, and directly below your upper chest. Your feet and legs should be kept together. Tighten your supporting muscles, so that your back, hips and legs stay locked in line. Starting with the arms straight, lower yourself approximately half the length of your extended arms, or until your elbows form a right angle. An excellent way to establish how far to descend is to use a standard basketball or soccer ball. Position yourself over the ball at the top of the movement, so that the ball is directly below your hips. This is the start position (fig. 7). Bend at the shoulders and elbows until your hips lightly make contact with the ball (fig. 8). On most people, this will be a good, objective indicator of the correct bottom position. Pause before pressing forcefully back to the start position.",
			"level" => 4,
			"beginner" => "1 set of 8", "intermediate" => "2 sets of 12", "progression" => "2 sets of 25",
		],
		[
			"name" => "Full Pushups",
			"description" => "From the kneeling position, place your palms on the floor and stretch your legs out behind you. Keep your thighs and feet together, and ensure that the hands are below your upper chest and shoulder width apart. Straighten the arms. The hips and spine should be in line. This is the start position (fig 9). Bend at the elbows and shoulders until your breastbone comes to within a fist’s width from the floor. In prison pushup competitions, a “counter” clenches his fist pinky side down on the floor, and counts out when the athlete’s chest touches the knuckle of his thumb. If you’re training alone and you wish to keep to the right depth, place a baseball or tennis ball directly below your chest (fig. 10). As your chest kisses the ball, pause and push up.",
			"level" => 5,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 20",
		],
		[
			"name" => "Close Pushups",
			"description" => "Begin this technique in the same top position as full pushups (Step 5), but with the hands touching. You don’t need to overlap the hands or form a “diamond” between the thumbs and index fingers; it is sufficient for the tips of the index fingers to touch. From the straight arm start position (fig. 11), lower yourself until your chest gently touches the backs of your hands (fig. 12). Pause briefly before pressing back to the start position.",
			"level" => 6,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 20",
		],
		[
			"name" => "Uneven Pushups",
			"description" => "Get into the classic pushup position; feet together, legs, hips and back aligned, and arms straight with the palms on the floor beneath your upper chest. With one arm firmly supporting you, place the other hand on a basketball. Both your hands should be directly below your shoulders for stability. This is the start position (fig. 13). Once you have found your balance, do your best to evenly distribute your weight through both hands. At first this will not be easy, but persevere. Bend at the elbows and shoulders until your chest touches the top of whichever hand is on the ball (fig. 14). Pause briefly before pressing back up to the start position.",
			"level" => 7,
			"beginner" => "1 set of 5 (both sides)", "intermediate" => "2 sets of 10 (both sides)", "progression" => "2 sets of 20 (both sides)",
		],
		[
			"name" => "1/2 One Arm Pushups",
			"description" => "Get into the half pushup top position, with a basketball located below your hips, as described in Step 4. Place one hand on the floor beneath your breastbone with your arm straight and your other hand in the small of your back. This is the start position (fig. 15). Bend at the shoulder and elbow until your hips reach the top of the basketball. This is the finish position (fig. 16). Pause and press back to the start position. If your triceps is weak, you’ll have a tendency to twist your torso as you move. Don’t—the whole body should be kept straight. This is true for all pushups.",
			"level" => 8,
			"beginner" => "1 set of 5 (both sides)", "intermediate" => "2 sets of 10 (both sides)", "progression" => "2 sets of 20 (both sides)",
		],
		[
			"name" => "Lever Pushups",
			"description" => "Get into a pushup position, with your body aligned and supported by the feet and one hand flat on the floor directly below your breastbone. Place your free hand on a basketball which is out to the side of the body. It should be as far away as you can reach while keeping your palm flat on the ball. Both your arms should be straight. This is the start position (fig. 17). Slowly, and under full control, lower yourself down until your chest is one fist’s width away from the floor. As with full pushups, you can use a baseball or tennis ball to check your depth if you are training alone. The act of lowering yourself will cause the basketball to roll out further to your side (fig. 18). Pause briefly in the bottom position, then push yourself back up.",
			"level" => 9,
			"beginner" => "1 set of 5 (both sides)", "intermediate" => "2 sets of 10 (both sides)", "progression" => "2 sets of 20 (both sides)",
		],
		[
			"name" => "One-Arm Pushups",
			"description" => "Kneel on the floor, with one palm out on the ground directly in front of you. Stretch your legs out behind you, until they are straight and supported by the toes. Keep the spine and hips aligned, and shift your bodyweight so that your supporting arm goes straight down below your chest—not out to the side or in front of you. Once you are stable, place your non-supporting hand in the small of your back. This is the start position (fig. 19). Bend at the shoulder and elbow, lowering yourself under full control until your jaw is approximately one fist width away from the floor (fig. 20). Pause momentarily, before pressing back up to the start position.",
			"level" => 10,
			"beginner" => "1 set of 5 (both sides)", "intermediate" => "2 sets of 10 (both sides)", "progression" => "1 set of 100 (both sides)",
		],
		[
			"name" => "Shoulderstand Squats",
			"description" => "Lie on your back, with your knees well bent. Kick against the floor while pushing with your hands until your feet are up in the air. As you reach this position, place your hands on your lower back for support, whilst keeping your upper arms firmly on the floor. You will now be in a shoulderstand position, supported by your shoulders and upper back, as well as the backs of your upper arms. Remember to constantly support your weight through these areas and keep any pressure off the neck. Your body should be locked straight, not bent at the hips. This is the start position (fig. 21). Keeping your torso as upright as possible, bend at the hips and knees until your knees touch your forehead. This is the finish position (fig. 22). Extend your legs directly back up, until your body is back in the start position. Repeat.",
			"level" => 1,
			"beginner" => "1 set of 10", "intermediate" => "2 sets of 25", "progression" => "3 sets of 50",
		],
		[
			"name" => "Jackknife Squats",
			"description" => "Stand in front of a sturdy object which comes up to your knees, or at least the tops of your shins. A small coffee table, chair or a bunk are good choices. Your legs should be shoulder width apart, or a little wider. Keeping your legs fairly straight, bend at your hips until your palms are in contact with the object. Tilt forwards slightly so that you can take some of your body’s weight through your hands. This is the start position (fig. 23). Now, with your torso remaining as parallel to the floor as possible, bend at the knees and hips until your hamstrings reach your calves and you cannot go any further. This will require that you bend your arms, also. This is the finish position (fig. 24). Using combined leg and arm power, push yourself up to the start position. Do not raise the heels at any point during the exercise.",
			"level" => 2,
			"beginner" => "1 set of 10", "intermediate" => "2 sets of 20", "progression" => "3 sets of 40",
		],
		[
			"name" => "Supported Squats",
			"description" => "Stand up straight with the feet shoulder width apart, or slightly wider. Your arms should be out straight and angled down, holding onto a sturdy object higher than your thighs. A desk, robust basin or the back of a chair will do. This is the start position (fig. 25). Slowly lower yourself down by bending at the hips and the knees, keeping your back as straight as possible, until your hamstrings meet your calves and you cannot descend any further. This is the finish position (fig. 26). Pause for a moment, before pushing yourself up using mostly leg power. To take some of the pressure off your legs—particularly in the bottom position—pull yourself up slightly with your arms, by exerting downward force on the object you are holding. Try to keep the arms fairly straight. Your heels should remain flat on the floor throughout the exercise.",
			"level" => 3,
			"beginner" => "1 set of 10", "intermediate" => "2 sets of 15", "progression" => "3 sets of 30",
		],
		[
			"name" => "Half Squats",
			"description" => "Stand with the feet shoulder width apart, or slightly wider. Don’t keep your feet perfectly in line with one another; allow your toes to point very slightly outwards. Place your hands in a comfortable position—on your hips, chest or shoulders is fine. This is the start position (fig. 27). Now bend at the hips and knees until your knees are angled at ninety degrees, or (in other words) your thighs are parallel to the floor. This is the finish position (fig. 28). You can use a mirror or ask a friend the first few times until your body learns the right depth. Don’t rush the technique, and never bounce; pause in mid-air at the bottom position for a one count before returning to the start position under full muscular control. Keep the back straight throughout the motion, and keep your heels flat on the floor. Your knees should always point in the same direction as your feet; don’t ever allow the knees to “track” inwards as you squat. The outwards angle of your toes will assist you with this.",
			"level" => 4,
			"beginner" => "1 set of 8", "intermediate" => "2 sets of 35", "progression" => "2 sets of 50",
		],
		[
			"name" => "Full Squats",
			"description" => "Stand tall, with the feet shoulder width apart or a little wider, depending upon your preference. Turn the toes slightly out, and place the arms in a comfortable position. This is the start of the movement (fig. 29). Bend at the hips and knees, keeping the back straight. When your thighs reach approximately parallel to the floor, shift your weight backwards as if you were about to sit down. Continue descending at a controlled speed until the backs of your thighs are resting against your calves. This is the finish position (fig. 30). Pause for a moment before pressing yourself back up with leg strength alone. Your upward motion should be the reverse of your downward motion. Don’t raise the heels, or allow the knees to track inwards.",
			"level" => 5,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 30",
		],
		[
			"name" => "Close Squats",
			"description" => "Stand up straight with your heels together, toes angled out very slightly. Your arms should be straight out in front of your chest. This is the start position (fig. 31). Bend at the knees and hips until your hamstrings are resting on your calves and you can go no further. Your chest will be pressed into your thighs (fig. 32). Do not raise the heels. To prevent yourself from tipping backwards, you may have to flex your shins to pull your toes up so that you ease forwards. Return to the start position using leg power only.",
			"level" => 6,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 20",
		],
		[
			"name" => "Uneven Squats",
			"description" => "Stand up straight with one foot flat on the floor, and another resting firmly on a basketball located approximately one foot length in front of the other foot. The feet should be shoulder width apart or a little wider. Your arms should be out in front of you, directly opposite your chest. This is the start position (fig. 33). Bend at the knees and hips until the back of the thigh of your non-ball leg touches the corresponding calf. You will not be able to descend any further, despite the fact that your ball leg is not compressed as much. This is the finish position (fig. 34). While learning this position, you may tip backwards, so ensure that you have enough clear space behind you just in case. This applies to all deep squatting. Pause briefly, before pushing yourself back up to the start position with both legs. At no point during the exercise should you raise your heel, rock forwards or bounce, despite the fact that you may instinctively want to do these things at first. Use strength.",
			"level" => 7,
			"beginner" => "1 set of 5 (both sides)", "intermediate" => "2 sets of 10 (both sides)", "progression" => "2 sets of 20 (both sides)",
		],
		[
			"name" => "1/2 One-Leg Squats",
			"description" => "Stand straight, with one foot flat on the floor, and the other foot up in the air in front of you. Your elevated foot should be at about the level of your opposite thigh, and the leg should be straight, or nearly so. Place your hands out in front of your chest. This is the start position (fig. 35). Bend the hip and knee of the leg which is supporting your bodyweight, until the knee is bent about ninety degrees. This will put your thigh approximately parallel with the floor. At this point, your raised foot should still be some way off the ground. This is the finish position (fig. 36). Pause for a moment under tension, before driving yourself up using the power of your single leg. Keep the back flat and the heel of your supporting leg on the floor at all times.",
			"level" => 8,
			"beginner" => "1 set of 5 (both sides)", "intermediate" => "2 sets of 10 (both sides)", "progression" => "2 sets of 20 (both sides)",
		],
		[
			"name" => "Assisted One-Leg Squats",
			"description" => "Place a basketball to the side of the foot of the leg you are planning to work. Stand up straight with one foot flat on the floor, and the other foot up in the air in front of you, as for half one-leg squats (Step 8). Place the arm corresponding to your raised leg out in front of you, and let your other arm hang by your side (fig. 37). Bend at the hip and knee of your supporting leg until your hamstrings meet your calf, and you cannot go any further. Place your hand firmly on the basketball. This is the finish position (fig. 38). Return to the standing position using mostly leg strength, but press down on the basketball to help you over the first few inches. Keep the heels flat.",
			"level" => 9,
			"beginner" => "1 set of 5 (both sides)", "intermediate" => "2 sets of 10 (both sides)", "progression" => "2 sets of 20 (both sides)",
		],
		[
			"name" => "One-Leg Squats",
			"description" => "Stand tall. Raise one foot in the air, until it is approximately level with your hips. Keep your elevated leg as straight as possible. This will not be too difficult provided you have spent time mastering the previous steps. Place the arms directly out in front of your chest. This is the start position (fig. 39). Bend at the knee and hip of the supporting leg. Control your descent; do not allow yourself to just drop. Descend smoothly, until the back of the thigh of your supporting leg compresses against the calf and you cannot go any further. Your torso will also be tight against your working thigh. This is the finish position (fig. 40). Pause for a count of one, under tension. Push yourself back up to the start position using leg strength alone. There should be no momentum at all. Retain a straight back, hold the elevated foot off the ground, and keep the heels firmly on the floor. Pause at the top, and repeat.",
			"level" => 10,
			"beginner" => "1 set of 5 (both sides)", "intermediate" => "2 sets of 10 (both sides)", "progression" => "2 sets of 50 (both sides)",
		],
		[
			"name" => "Vertical Pulls",
			"description" => "Find a vertical base you can hold on to. This base should be secure and allow you to grip it safely; a doorframe or high railings are excellent potential candidates. Stand close to the base—the tips of your toes should be between three and six inches out. Take hold of the object in a comfortable grip. Ideally your hands should be shoulder width but any symmetrical position will suffice. This is the start position (fig. 41). Because of your proximity to the base, your arms will be well bent. Now allow your bodyweight to shift back by leaning slightly. Extend your arms as you go, until they are very nearly straight, and your body is angled diagonally backwards. This is the finish position (fig. 42). At this point you will feel a gentle stretch in your upper back, and possibly your arms. Pause momentarily before pulling yourself back to the start position, by contracting the shoulder blades and bending the arms simultaneously. Pause and repeat.",
			"level" => 1,
			"beginner" => "1 set of 10", "intermediate" => "2 sets of 20", "progression" => "3 sets of 40",
		],
		[
			"name" => "Horizontal Pulls",
			"description" => "Find a horizontal base you can hold onto which will safely carry your bodyweight. It needs to be at least as high as your hips. The top of a big, sturdy, table or desk is usually the best option. Get down so that your chest and lower body are underneath the table and reach up so that you can hold the lip, using an overhand grip. Ideally your hands should be shoulder width but this will not always be possible depending upon what kind of table or desk you have access to. Now pull yourself up so that your back is off the floor. Depending upon the height of the table, your arms will probably have to be slightly bent for this. Keep your body tensed and locked straight, so that its weight goes only thorough your hands and heels. This is the start position (fig. 43). Now smoothly pull yourself up, keeping the body (especially the knees) aligned, until your chest touches the lip of the table at the point where your hands are gripping. This is the finish position (fig. 44). Pause for a count of one, before lowering back to the start position. Repeat.",
			"level" => 2,
			"beginner" => "1 set of 10", "intermediate" => "2 sets of 20", "progression" => "3 sets of 30",
		],
		[
			"name" => "Jackknife Pulls",
			"description" => "To perform this preliminary pullup exercise, you will require a high horizontal bar and a high-backed chair or similar object situated just in front of the bar. Jump up and grab hold of the bar. Your arms should be approximately shoulder width apart, in an overhand grip. When working with the bar, always keep your shoulders good and “tight” (see page 117). Don’t fully relax your arms, either; keep them flexed and with a slight kink in the elbows. Now swing your legs up and rest your calves near the ankles on the back of the object you’ve placed in front of the bar. Arrange this object beforehand so that you’ll be able to straighten your legs out. Ideally, the object should be high enough that the feet of your straight legs end up opposite your pelvis—the classic jackknife angle. This is the start position (fig. 45). Now smoothly pull yourself up, using your straightened legs to assist you by pushing down with them. When your chin passes the bar, you are in the finish position (fig. 46). Pause before lowering yourself to the start position under full muscular control. Take care getting down when you’ve finished your set, and don’t work to “failure.” If your grip releases before your feet are directly below you, you risk falling and hurting yourself.",
			"level" => 3,
			"beginner" => "1 set of 10", "intermediate" => "2 sets of 15", "progression" => "3 sets of 20",
		],
		[
			"name" => "Half Pullups",
			"description" => "Take hold of a horizontal bar. The bar should be high enough that your feet are clear of the floor—even if only by an inch—when your body hangs down straight. Use an overhand grip which is shoulder width or a little wider. Jump up so that you are supporting your weight on arms that are bent approximately at right angles (your upper arms should be parallel to the floor). Keep your shoulders tight. Bend at the knees, looping one ankle over the other to take the legs out of the movement. This is the start position (fig. 47). Smoothly pull yourself up by bending at the shoulders and elbows until your chin clears the height of the bar. This is the finish position (fig. 48). Allow your elbows to travel forwards if it seems “right” for you. Pause at the top for a moment, before lowering to the start position under control. Repeat as needed. After you get set, keep the legs still throughout the entire motion.",
			"level" => 4,
			"beginner" => "1 set of 8", "intermediate" => "2 sets of 11", "progression" => "2 sets of 15",
		],
		[
			"name" => "Full Pullups",
			"description" => "Grab hold of a horizontal bar with a shoulder width overhand grip. A slightly wider grip is acceptable—experiment to find out which width feels strongest for you. Bend at the knee and loop the ankles behind your body. Your feet should be clear of the ground. Tense the body, keep the shoulders down tight and retain a very slight (almost unnoticeable) bend in the elbows to take the stress off the arm joints and place it on the muscles instead. This is the start position (fig. 49). Bend at the elbows and shoulders until your chin passes over the bar. This is the finish position (fig. 50). Enjoy the view! Pause for a moment, before reversing the motion under full control. Don’t be explosive—this means depending on momentum during the exercise. The perfect muscle-building technique is smooth. Try to take two seconds up and two seconds down, pausing for a second at the top and bottom.",
			"level" => 5,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 8", "progression" => "2 sets of 10",
		],
		[
			"name" => "Close Pullups",
			"description" => "Jump up and grab a bar with an overhand grip. Your hands should be next to each other—four inches apart at the maximum, if a very close grip irritates your joints. Bend at the knees with your ankles looped behind your vertical plane to keep them out of the motion. Kink the elbows very slightly and keep your shoulders tight. This is the start position (fig. 51). Bend at the elbows and shoulders to raise your body, slowly levering yourself up until your chin passes the bar. This is the finish position (fig. 52). Pause for a count of one, before slowly lowering yourself back down to the start position. Pause and repeat. Try to minimize leg movement during the set.",
			"level" => 6,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 8", "progression" => "2 sets of 10",
		],
		[
			"name" => "Uneven Pullups",
			"description" => "Grasp the horizontal bar with one hand. A side-on or underhand grip will be more comfortable than the classic overhand version. Now take hold of the wrist of the hand which is gripping the bar, using your free hand. The thumb of the hand holding your wrist should be just below your opposite palm, with the fingers below the back of your hand. Your feet should be off the ground, knees bent, with your ankles looped behind you. Your shoulder girdle should be flexed at all times. The arm that is holding the bar should be straight except for a slight kink in the elbow. Your other arm, due to its lower position, will be bent more acutely. Your elbows will be in front of your torso. This is the start position (fig. 53). Bend at the elbows and shoulders to smoothly pull yourself up until your chin is over the bar. This is the finish position (fig. 54). Pause at the top, before slowly lowering yourself back down to the start position. Pause again before repeating.",
			"level" => 7,
			"beginner" => "1 set of 5 (both sides)", "intermediate" => "2 sets of 7 (both sides)", "progression" => "2 sets of 9 (both sides)",
		],
		[
			"name" => "1/2 One-Arm Pullups",
			"description" => "Grab an overhead bar with one hand, using your strongest gripping position. For some people, this will be an overhand grip; for others, side-on or underhand. Using a hanging ring is probably ideal for most people. Place your other arm anywhere that seems comfortable; most of my students like to leave it out to the side in mid-air, but I personally prefer placing it in the small of my back, as for one-arm pushups. Any position that doesn’t interfere is fine. Set yourself (by jumping, kipping, using a chair, etc.) so that your lifting arm is bent halfway. The elbow should be at a right angle, with your upper arm parallel to the ground. Your feet should be clear of the floor and looped behind you as for previous steps. The shoulder of your lifting arm should be tightly braced, and your whole body flexed. This is the start position (fig. 55). Bend at the elbow and shoulder and smoothly pull your body up until your chin is over the height of the bar. This is the finish position (fig. 56). Pause at the top, before slowly lowering yourself back down to the start position. Pause at the bottom and repeat.",
			"level" => 8,
			"beginner" => "1 set of 4 (both sides)", "intermediate" => "2 sets of 6 (both sides)", "progression" => "2 sets of 8 (both sides)",
		],
		[
			"name" => "Assisted One-Arm Pullups",
			"description" => "Throw a towel over a horizontal bar. Jump up and grasp the bar with your strongest grip so that the hanging towel is towards the inside of your hand. With your opposite hand, grab the towel as low as possible—around eye level is about right for most athletes. Bend the knees with the ankles looped behind the body. Keep the shoulders braced, and retain a slight bend in the arm which is holding the bar. This is the start position (fig. 57). Now begin to pull yourself up. For the first half of the movement—until the elbow of the arm holding the bar is bent at a right angle—assist yourself by pulling on the towel. Halfway up—when the elbow of the arm holding the bar is bent at a right-angle—release the towel, and continue pulling yourself up with just one arm until your chin is over the bar (fig. 58). Pause, before lowering yourself down using the power of your lone arm. When you reach the lowest position, grip the towel once again. Pause and repeat.",
			"level" => 9,
			"beginner" => "1 set of 3 (both sides)", "intermediate" => "2 sets of 5", "progression (both sides)" => "2 sets of 7 (both sides)",
		],
		[
			"name" => "One-Arm Pullups",
			"description" => "Jump up and firmly squeeze an overhead bar using your strongest gripping position. Your legs should be clear of the floor, with your knees bent so that your feet are behind you. Loop one ankle over the other to keep your legs still. Place your non-lifting arm in a comfortable position (you should have found your ideal position when you learned Step 8, half one-arm pullups). Your working shoulder should be set tight, and your body tensed for action. You are about to perform an advanced strength feat, and this should be reflected in your psychology. Your working arm should be virtually straight, with just a little kink in it to take the stress of the joints. This is the start position (fig. 59). Bend at the elbow and shoulder and pull your body up with as little momentum as possible until your chin is over the height of the bar. This is the finish position (fig. 60). Pause, and smoothly lower yourself back down to the start position. Pause at the bottom and repeat—if you can!",
			"level" => 10,
			"beginner" => "1 set of 1 (both sides)", "intermediate" => "2 sets of 3 (both sides)", "progression" => "2 sets of 6 (both sides)",
		],
		[
			"name" => "Knee Tucks",
			"description" => "Sit on the edge of a chair or bed. Lean back a little, grip the edge of the seat with your hands, and straighten your legs. Your feet should be together with the heels raised a few inches from the floor. This is the start position (fig. 61). Smoothly bring the knees up and in until they are approximately six to ten inches from your chest. Exhale as you draw the knees in. By the time the motion is complete, you should have exhaled fully and your abs should be tightly contracted. This is the finish position (fig. 62). Pause for a count of one before reversing the motion and finishing again in the start position. Inhale as you extend. Your feet should follow a straight line backwards and forwards, and should not touch the floor until the set is completed. Keep the stomach tucked in at all times. Resist the urge to pump out reps quickly. As with all waist techniques, take extra breaths between reps if you need to.",
			"level" => 1,
			"beginner" => "1 set of 10", "intermediate" => "2 sets of 25", "progression" => "3 sets of 40",
		],
		[
			"name" => "Flat Knee Raises",
			"description" => "Lie flat on the floor, with your legs together and your arms by your side. Bend your knees so that they are at approximately ninety degrees (i.e., a right angle), with the feet an inch or two off the ground. Pressing hard on the floor with your hands will help keep your torso stable. This is the start position (fig. 63). Now smoothly bring your knees up over your hips, so that your thighs are perpendicular to the floor, and your calves are parallel to the floor. Keep the knees at a right angle throughout and exhale as you go, keeping your stomach muscles tight. This is the finish position (fig. 64). Pause for a count of one, before reversing the motion by extending your legs as you lower your feet. Inhale as you return to the start position. After you begin, at no point throughout the movement should your feet touch the floor.",
			"level" => 2,
			"beginner" => "1 set of 10", "intermediate" => "2 sets of 20", "progression" => "3 sets of 35",
		],
		[
			"name" => "Flat Bent Leg Raises",
			"description" => "Lie on your back with your legs together and stretched out on the floor. Your hands should be by your sides, and also in contact with the floor. Raise your legs, bending them at the knee approximately forty-five degrees from the straight alignment. Your feet should be kept an inch or two off the floor. This is the start position (fig. 65). The positive portion of the exercise involves raising the legs and feet smoothly—over a count of two seconds—until the feet are directly above the pelvis (fig. 66). As you move, the angle of the knee should not change; it must remain “locked” in the same position. Pressing down on the floor with the hands will help you stabilize your torso throughout the movement. Pause at the top, before reversing the motion. Pause again in the start position before repeating as necessary. Exhale as the feet move up, inhale as they are moving down. Keep the stomach tight at all times. The feet should not touch the floor at all during the set.",
			"level" => 3,
			"beginner" => "1 set of 10", "intermediate" => "2 sets of 15", "progression" => "3 sets of 30",
		],
		[
			"name" => "Flat Frog Raises",
			"description" => "Perform the positive portion of Step 3, the bent leg raise, but instead of pausing at the top (fig. 66), straighten your legs out fully. They should be perfectly straight, and perpendicular to the floor, so that your legs and torso form a right angle. This is the finish position (fig. 67). You should exhale throughout this two-part motion. In most midsection work you would now reverse the movement; but not so here. Your muscles are stronger when lowering under resistance (because gravity helps), and frog raise techniques take advantage of this fact. Lower your legs, keeping them perfectly straight (fig. 68) until they are an inch or two off the floor (fig. 69). In most exercises you should take about two seconds to go up and two seconds to go down. But for this exercise count four seconds down, to allow your body more work in the stronger position. Inhale as your legs slowly descend. Repeat.",
			"level" => 4,
			"beginner" => "1 set of 8", "intermediate" => "2 sets of 15", "progression" => "3 sets of 25",
		],
		[
			"name" => "Flat Straight Leg Raises",
			"description" => "Lie on the floor, face up. Your feet should be together, your legs should be straight, and your arms should be by your sides. Lift your feet an inch or two from the floor. Pressing down with the hands will help you keep your torso stable. This is the start position (fig. 70). Now, keeping your legs locked, raise your feet until they are directly above your pelvis. Exhale as you lift, keeping the stomach tight. It should take you at least two seconds to smoothly accomplish this—don’t explode up. Your legs and torso will form a right angle at this point. This is the finish position (fig. 71). Pause briefly, before reversing the motion exactly, inhaling as you go down. Pause again in the start position and repeat. At no point should allow your knees to unlock, and your heels shouldn’t touch the floor until the set is completed.",
			"level" => 5,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 20",
		],
		[
			"name" => "Hanging Knee Raises",
			"description" => "Jump up and grab an overhead bar. Your hands should be about shoulder width apart. The bar needs to be high enough that your feet hang clear from the ground, even if only by an inch. Your body should be in a straight line, and you must keep your shoulders “tight” (see page 117). This is the start position (fig. 72). Bring your knees up smoothly until they are level with your pelvis and your knees are at a right angle. Your thighs will be parallel with the floor. Exhale during this motion, keeping your stomach pulled in. This is the finish position (fig. 73). Pause for a moment, then reverse the motion until your body is fully extended, inhaling as you go. Repeat.",
			"level" => 6,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 15",
		],
		[
			"name" => "Hanging Bent Leg Raises",
			"description" => "Grab an overhead bar so that your body is in a straight line and your feet are clear of the ground. Your hands should be approximately shoulder width, and your shoulders kept nice and tight. Now bend at the knees until your knee joints are angled off straight by around forty-five degrees. This will put your feet a few inches behind the rest of your hanging body. This is the start position (fig. 74). Smoothly raise your legs at the hips until your feet are opposite your pelvis. This is the finish position (fig. 75). Pause and reverse the motion, before repeating. Only move at the hips; keep your knee angle “locked” into place. Exhale as you raise your legs, inhale as you lower them. Keep the abs tense.",
			"level" => 7,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 15",
		],
		[
			"name" => "Hanging Frog Raises",
			"description" => "Assume a start position identical to Step 7, hanging bent leg raises (fig. 74), and raise your legs just as you would for that same exercise. Once you reach the top position with your feet in line with your hips (fig. 75), extend your feet out in a line directly away from you, so that your legs are perfectly straight. This will put your locked legs level with the floor, and your upper and lower body at a right angle (fig. 76). Pause for a moment, but do not reverse the motion. Instead, lower your legs while keeping them locked out perfectly straight (fig. 77). Finish with your body fully extended (fig. 78) before assuming the start position again and repeating for the desired number of reps. Exhale as the legs are going up, inhale as they are going down, and keep the stomach tucked in at all times.",
			"level" => 8,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 15",
		],
		[
			"name" => "Partial Straight Leg Raises",
			"description" => "Hang from an overhead bar, with your body in a straight line and your feet off the floor. Tighten the shoulders. Lift the locked legs until they are at a forty-five degree angle, and hold. This is the start position (fig. 79). Keeping your knees locked straight, smoothly raise your legs until they are parallel with the floor. This is the finish position (fig. 80). Pause for a moment, before lowering the legs back to a forty-five degree angle. Repeat. Exhale as your legs move up, inhale as they move down. Keep the abs tight.",
			"level" => 9,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 15",
		],
		[
			"name" => "Hanging Straight Leg Raises",
			"description" => "You know the drill by now! Take hold of an overhead bar which is high enough to leave your feet a short distance from the floor when your body is extended. Your hands should be approximately shoulder width apart. Ensure that the shoulders are tight. This is the start position (fig. 81). Smoothly—over the course of at least two seconds—raise your legs until they are parallel with the floor. Exhale as your legs rise, blowing all the air you can out of your lungs so that the abdomen is fully contracted. This is the finish position (fig. 82). Pause, before reversing the motion perfectly for at least another two seconds until you are back in the start position. Inhale as you go. Remain “flexed,” even in the start position. Your legs must stay locked at all times and you must use pure muscular control; no momentum allowed.",
			"level" => 10,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 30",
		],
		[
			"name" => "Short Bridges",
			"description" => "Lie on your back, with your legs stretched out and your hands crossed on your stomach. Draw your feet in, bending the knees until your shins are nearly parallel to the ground and your feet are flat on the floor. The feet should be shoulder width apart or a little less, depending upon your frame. Your heels will be around six to eight inches from your buttocks. This is the start position (fig. 83). Press down through the feet, lifting the hips and back clear of the ground until only the shoulders and feet are supporting the bodyweight. At this point, your thighs, trunk and torso should form a straight line, with no sagging of the hips. This is the finish position (fig. 84). Pause in the top position for a moment, before reversing the motion, lowering your body back to the start position. Repeat the exercise for your target repetitions, exhaling as you go up, inhaling on the way down.",
			"level" => 1,
			"beginner" => "1 set of 10", "intermediate" => "2 sets of 25", "progression" => "3 sets of 50",
		],
		[
			"name" => "Straight Bridges",
			"description" => "Sit on the ground with your legs stretched out in front of you. Your knees should be straight, with your feet about shoulder width apart. Place your palms on the floor on either side of your hips, with your fingers pointing towards your toes. Sit up straight. Your body will now form a right angle, with your trunk perpendicular to your legs. This is the start position (fig. 85). Press down through the hands, tensing the arms as you simultaneously push your hips upwards until your legs and torso form a straight line. Draw the chin up and look towards the ceiling. At this point your bodyweight will be passing through your palms and heels. This is the finish position (fig. 86). Pause before reversing the motion and repeating as necessary. Exhale as you press yourself up, inhale as you go down.",
			"level" => 2,
			"beginner" => "1 set of 10", "intermediate" => "2 sets of 20", "progression" => "3 sets of 40",
		],
		[
			"name" => "Angled Bridges",
			"description" => "Angled bridges require an object which is about knee height or a little higher. In prison, a bunk is perfect. The average bed in an American home is a bit taller, but still acceptable for our purposes. Sit on the edge of the bunk or bed, and lie back with your feet flat on the ground. They should be approximately shoulder width apart. Shuffle forwards a little so that your hips are off the bunk, and place your hands either side of your head, with your fingers pointing towards your feet. This is the start position (fig. 87). Press down through the hands, straightening the elbows and pushing the hips up, arching your back as you do so. Continue smoothly pushing as far as you can, at least until your head and body are entirely clear of the bunk. The arms don’t need to be fully extended; the elbows will be bent. You may only lift up a few inches. That’s fine. Allow your head to tilt back under control, so that you can see the wall behind you. This is the finish position (fig 88). Reverse the motion, lowering yourself until your torso and head are resting completely on the bunk again. Repeat as necessary, breathing normally.",
			"level" => 3,
			"beginner" => "1 set of 8", "intermediate" => "2 sets of 15", "progression" => "3 sets of 30",
		],
		[
			"name" => "Head Bridges",
			"description" => "Lie with your back on the floor. Draw your feet in, bending the knees until your heels are approximately six to eight inches from your glutes. The feet should be shoulder width apart or slightly closer. Place the hands alongside the head, with the palms flat on the floor and your fingers pointing towards your toes. Your elbows should be angled towards the ceiling at this point. Now push the hips as high as you can, lifting the body from the floor. Continue pushing through your arms and legs until your back is well arched, and your hips are high. The head should be tilted down, with the crown of your skull pointing towards the floor. This is a bridge hold. Retain this position momentarily, before bending at the arms and legs until the top of your skull very gently touches the floor. This is the start position (fig. 89). Pause again briefly, before pushing yourself back up to the bridge (fig. 90). This is the finish position. Go carefully, so that you don’t bang your head. Maintain the deep arch in the back all the way throughout the set, breathing as normally as possible all the way through. When you have finished all your reps, smoothly lower your shoulders, back and hips to the floor.",
			"level" => 4,
			"beginner" => "1 set of 8", "intermediate" => "2 sets of 15", "progression" => "2 sets of 25",
		],
		[
			"name" => "Half Bridges",
			"description" => "This exercise will require a basketball or soccer ball to monitor your form. Sit down on the floor, placing the ball on the ground right behind you. Lay back so that you are lying down with only your shoulders and the soles of your feet on the floor. The feet should be shoulder width apart or a little closer, and the ball should be supporting the small of your back. If you find this position uncomfortable, lay a folded towel or cushion over the ball before you begin. Place the hands alongside the head, with the palms flat on the floor and your fingers pointing towards your toes. Now press through the hands, pushing your shoulders and head off the floor so that only the soles of your feet, the ball, and your palms are supporting your bodyweight. This is the start position (fig. 91). From here, push the hips as high as you can, extending the arms and legs and lifting the back up until it is well clear of the ball. Keep going until your back is fully arched. This is the finish position (fig, 92). Pause for a moment at the top, before lowering yourself slowly to the start position. After starting the set, only descend until the small of your back lightly touches the ball—don’t rest your bodyweight on it. Repeat, breathing as normally as possible.",
			"level" => 5,
			"beginner" => "1 set of 8", "intermediate" => "2 sets of 15", "progression" => "2 sets of 20",
		],
		[
			"name" => "Full Bridges",
			"description" => "Lie on your back. Draw your feet in, bending the knees until your heels are approximately six to eight inches from your glutes. The feet should be shoulder width apart or slightly closer. Place the hands alongside the head, with the palms flat on the floor and your fingers pointing towards your toes. Your elbows should be angled towards the ceiling at this point. This is the start position (fig. 93). Now push the hips as high as you can, lifting the body from the floor. Continue pushing through your arms and legs until your back is well arched, and your hips are high. In the perfect bridge, your arms will be totally straight. Allow the head to tilt backwards between the arms, so that you can look at the wall behind you. This is the finish position (fig. 94). Hold this top position for a moment, before reversing your motion. Control your descent—you will gain more benefit from the exercise if you lower yourself smoothly than if you simply collapse. Continue going all the way back down until your hips, back and head are resting completely on the floor again. This sequence constitutes one rep. Push yourself back up again for your target reps, breathing normally throughout.",
			"level" => 6,
			"beginner" => "1 set of 6", "intermediate" => "2 sets of 10", "progression" => "2 sets of 15",
		],
		[
			"name" => "Wall Walking Bridges (Down)",
			"description" => "Stand approximately one arm’s length from a wall. If in doubt about your positioning, it’s better to stand closer to the wall than further from it—you can more safely adjust your position this way. Your feet should be about shoulder width apart. Push the hips forwards and begin bending backwards. Raise your chin, tilting your head back as far as is comfortable. Continue smoothly bending back until you can see the wall behind you. As soon as you can see the wall, raise your hands, moving them over your shoulders and placing the palms flat on the wall, fingers pointing down, level with your head. This is the start position (fig. 95). Shift some of your bodyweight back through your hands, and lower one by a few inches, before placing it securely on the wall again. Now follow suit with your opposite hand, lowering it even further on the wall. Keep bending backwards as you “walk” down the wall with your hands (fig. 96). As you move downwards, you will need to move slightly away from the wall to accommodate your body bend. Do this by taking mini-steps forwards any time you feel the need. Continue alternating this movement until you run out of wall. When this occurs, place your hands flat on the floor. At this stage you will be in a full bridge hold next to the wall. This is the bottom position (fig. 97). From here, simply lower your backside to the floor, and stand up. Return to the start position, and walk back down again. Breathe regularly as you go.",
			"level" => 7,
			"beginner" => "1 set of 3", "intermediate" => "2 sets of 6", "progression" => "2 sets of 10",
		],
		[
			"name" => "Wall Walking Bridges (Up)",
			"description" => "This step begins when you are standing totally clear of the wall, with your back to it. From here, assume the start position you learned for walking down; bend backwards with your hands over your shoulders making contact with the wall (fig. 95). Then walk down the wall as described in Step 7, until you are in a full bridge hold next to the base of the wall (fig. 97). Now it’s time to go back up. This is done by reversing the movement. Place one palm back on the wall, pushing through it. Next, place your other palm above it (fig. 98). This transition whereby your palms go from the floor back onto the wall is the hardest part of the technique. Now simply place one palm above the other repeatedly as you go back up the wall. As your body straightens, you will probably have to take mini-steps back towards the wall to keep a healthy pressure going through your palms. Continue walking upwards until you are nearly straight (fig. 99). From here, push gently away from the wall until you are standing totally clear from it again (fig. 100). This cycle—standing, walking all the way down, walking back up, and standing free again—constitutes one single repetition of this exercise.",
			"level" => 8,
			"beginner" => "1 set of 2", "intermediate" => "2 sets of 4", "progression" => "2 sets of 8",
		],
		[
			"name" => "Closing Bridges",
			"description" => "Stand up straight with your feet approximately shoulder width apart. The space behind you should be clear of objects for at least the distance of your height. This is the start position. Place your hands on your hips and begin pushing your pelvis forwards (fig. 101). When your pelvis is as far front as it will go, begin bending your knees as you simultaneously arch your spine backwards. Tilt your head back and look behind you as you go. This must all form one smooth movement. Continue this arching motion until you can see the ground a few feet behind you. As soon as you see the floor, take your hands off your hips and pass them back over your shoulders, beyond your head (fig. 102). This moving posture requires considerable flexibility, but you will find that the forwards shift of your hips combined with the bend in the knees prevents you from falling backwards. Extend your arms as you keep the movement going, until your palms are resting on the floor. This is the finish position, the full bridge hold (fig. 103). From here, bend the arms and legs until your back is on the floor. Now stand up into the start position again to begin your second repetition. Breath normally throughout the set.",
			"level" => 9,
			"beginner" => "1 set of 1", "intermediate" => "2 sets of 3", "progression" => "2 sets of 6",
		],
		[
			"name" => "Stand-To-Stand Bridges",
			"description" => "Stand up straight and perform a closing bridge (Step 9) into a full bridge hold (fig. 104). From this position, shift your weight forwards through the thighs, and bend the knees as you straighten your arms. Continue gradually shifting your weight forwards as your press through the hands and finally the fingers, lifting the palms off the floor. At this point, provided your back is flexible enough to maintain a high arch, and your stomach is powerful enough, your fingers will leave the ground as you start to straighten yourself up (fig. 105). This upwards motion should be the consequence of a smooth forwards transfer of your bodyweight, not the result of an explosive push off the floor with the hands. Continue the movement, drawing your hands back over your shoulders and pivoting the neck up in line with the body. Finally, pull the hips in until you are standing straight with hands by your sides. This is the finish position (fig. 106). Going from standing up, down to a full bridge hold, then straightening yourself back up to the standing position again constitutes one full repetition. Repeat the exercise, breathing normally.",
			"level" => 10,
			"beginner" => "1 set of 1", "intermediate" => "2 sets of 3", "progression" => "2 sets of 10-30",
		],
		[
			"name" => "Wall Headstands",
			"description" => "Find a solid wall. Place a pillow, cushion or folded towel down by the base of the wall. This will be for your head. Get on your hands and knees, and place the top of your head on the cushion. Your skull should be between six and ten inches from the wall. Set your palms down securely on either side of your head, about shoulder width apart. Bring your strongest knee up close to your corresponding elbow, and straighten out your other leg so the knee is off the ground (fig. 107). Now, push down hard with your strongest leg, as you simultaneously kick your other leg up in the air so that both legs dynamically move up towards the wall. Once you have “found” the wall, slowly straighten your legs so that the body is aligned (fig. 108). Keep the mouth closed and breath smoothly though the nose. After you have remained up for the required time, bend the legs and bring them down under control.",
			"level" => 1,
			"beginner" => "30 seconds", "intermediate" => "1 minute", "progression" => "2 minutes",
		],
		[
			"name" => "Crow Stands",
			"description" => "Sit down on your haunches with your knees apart. Place your palms on the floor in front of you, at approximately shoulder width distance apart. Your arms should be bent a little. Lean forwards, placing your knees securely on the outside of your elbows (fig. 109). Now gradually continue tipping yourself forward, placing more and more weight through your palms and correspondingly less through your feet. Eventually the point of balance will shift, and your feet will lose contact with the ground. Hoist the legs up tight and balance for the required time, breathing steadily (fig. 110). When you are finished, reverse the movement by gently tipping your weight backwards until your toes come into contact with the floor again.",
			"level" => 2,
			"beginner" => "10 seconds", "intermediate" => "30 seconds", "progression" => "1 minute",
		],
		[
			"name" => "Wall Handstands",
			"description" => "Approach a solid wall. Place your palms flat on the floor six to ten inches from the base of the wall, at about shoulder width apart. Your arms should be straight, or nearly so. Bend at the knees, bracing the whole body. Bring the knee of your strongest leg up towards the corresponding elbow (fig. 111) and push down hard with that leg, kicking back and up with the other leg. As you rise, allow the foot of your strongest leg to leave the floor and follow your other leg as it approaches the wall. Keep your arms extended. The heels of both your feet should touch the wall at the same time. At first your back and butt may also slam into the wall as you overestimate the power required to kick up, but over time you’ll learn the art of finding the wall perfectly. At this point your arms should be straight and your body aligned with a slight arch towards the wall. This is the position for the wall handstand technique (fig. 112). Hold this position for the required time, breathing normally.",
			"level" => 3,
			"beginner" => "30 seconds", "intermediate" => "1 minute", "progression" => "2 minutes",
		],
		[
			"name" => "Half Handstand Pushups",
			"description" => "Approach a solid wall. Place your palms flat on the floor six to ten inches from the base of the wall, at about shoulder width apart. Keeping your arms as straight as possible, assume the position and kick up into a wall handstand (Step 3). You should now be in the classic wall handstand starting posture; your torso should be braced, your arms straight, and your body should curve backwards slightly to the point where your heels make a gentle contact with the wall. This is the start position for the half handstand pushup (fig. 113). Now bend at the shoulders and elbows until the top of your head is halfway towards touching the ground. This is the finish position (fig. 114). Pause briefly, before pushing firmly back up to the start position. The full range of motion for this technique will only be about six inches; at first, try not to overestimate and go too low. Breathe smoothly throughout the set.",
			"level" => 4,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 20",
		],
		[
			"name" => "Handstand Pushups",
			"description" => "Approach a solid wall and place your palms flat on the ground approximately shoulder width apart and about six to ten inches from the wall. Bend at the knees and kick up against the wall into a handstand position. If you have worked through the steps so far you will now be pretty expert at this. If you have developed your own technique, that’s fine; calisthenics isn’t gymnastics—it’s the muscle-building portion of the exercise that’s of importance, not how you get there. Once you have found the wall, keep contact with it through your heels, maintaining a slight backwards arch in your body. Your arms should be straight. This is the start position (fig. 115). Bend at the shoulders and elbows until the top of your head gently makes contact with the floor. This is the finish position (fig. 116). Use “kiss-the-baby” pressure to protect your head (see pages 43—44). Pause briefly for a second, before pushing yourself back up to the start position. Apply muscular control and concentration in all inverse movements to ensure safety. Breathe as smoothly and evenly as possible.",
			"level" => 5,
			"beginner" => "1 set of 5", "intermediate" => "2 sets of 10", "progression" => "2 sets of 15",
		],
		[
			"name" => "Close Handstand Pushups",
			"description" => "Locate a solid wall and place your hands on the ground six to ten inches out from it. Your hands—specifically the index fingers—should be touching. Kick up into a handstand with straight arms and a lightly curved body tapering back to where the heels make contact with the wall. This is the start position (fig. 117). Keeping the elbows well out in front, bend at the shoulders and elbows until the head gently kisses the floor (fig. 118). Pause briefly—under full control—before pressing back up to the start position.",
			"level" => 6,
			"beginner" => "1 set of 15", "intermediate" => "2 sets of 9", "progression" => "2 sets of 12",
		],
		[
			"name" => "Uneven Handstand Pushup",
			"description" => "Place a basketball by the base of a wall. Kick up into a wall handstand next to the basketball using whichever technique you find easiest, then reach out and place one of your palms on the basketball. This motion sounds simple but is in fact very difficult; it will require supporting your bodyweight on one locked arm for a fraction of a second, or as long as it takes to find the ball. Once your palm is secured on the basketball, position it so that your hands are about shoulder width apart. The arm of the hand which is on the floor should be straight, but your other arm will be bent. Apply your weight as evenly as you can through both hands, breathing smoothly. Your triceps, biceps and shoulders need to work very hard at this point, or you may lose control of the ball and crash down. This is the start position (fig. 119). Now bend at the elbows and shoulders until the head gently touches the floor. This is the finish position (fig. 120). Pause, and press back up.",
			"level" => 7,
			"beginner" => "1 set of 5 (both sides)", "intermediate" => "2 sets of 8 (both sides)", "progression" => "2 sets og 10 (both sides)",
		],
		[
			"name" => "1/2 One-Arm Handstand Pushups",
			"description" => "Kick up into a handstand against a wall. Your body should be slightly arched, with your heels in contact with the wall. Your hands should be six to ten inches from the base of the wall, and shoulder width apart. Keep your arms straight. Now gradually press off with one palm, so that your center of gravity shifts towards the other side of the body. This will put more of your bodyweight through the opposite palm. Continue this transition over the course of a few seconds until there are only a few pounds of pressure left in the pushing palm. Now gently lift that palm away from the floor altogether, and hold it away from your body for balance. You will now be supporting yourself on one straight arm. This is the start position (fig. 121). Bend at the elbow and shoulder of your supporting arm until your head is halfway towards the floor. This is the finish position (fig. 122). Pause and press up.",
			"level" => 8,
			"beginner" => "1 set of 4 (both sides)", "intermediate" => "2 sets of 6 (both sides)", "progression" => "2 sets of 8 (both sides)",
		],
		[
			"name" => "Lever Handstand Pushups",
			"description" => "Kick up into a handstand against a sturdy wall. As usual, your arms should be shoulder width apart and your fingers should be six to ten inches from the wall with only your feet touching the surface. This will leave a slight natural curve in your body. As with Step 8, slowly transfer the majority of your weight—approximately ninety percent—onto one palm. Now flip your other palm over, so that the back of hand is flat on the floor with the fingers pointing away from you. Straighten out your arm in front of you, maintaining contact with the floor as you go. Some pressure should still be flowing through the digits of this hand. This is the start position (fig. 123). Keeping the arm of the upturned hand extended, bend at the shoulder and elbow of your other arm, with full muscular control—don’t just allow your body to drop or you will hurt your head and possibly even crick your neck in the process. Pause as the top of your skull softly touches the floor. This is the finish position (fig. 124). Now, press back up to the start position, pushing through your palm and the back of your hand simultaneously.",
			"level" => 9,
			"beginner" => "1 set of 3 (both sides)", "intermediate" => "2 sets of 4 (both sides)", "progression" => "2 sets of 6 (both sides)",
		],
		[
			"name" => "One-Arm Handstand Pushup",
			"description" => "Kick up into a handstand against a wall, and lean out to the side until you are supporting yourself with one arm, as in half one-arm handstand pushups (Step 8). Keep your body gently arched with the heels against the wall. This is the start position (fig. 125). Bend at the elbow and shoulder of your supporting arm until the top of your skull very gently touches the floor. Keep your non-supporting hand ready in case you make a mistake and it has to help out. This is the finish position (fig. 126). In pressing back up to the start position, some explosiveness may be needed. To help you get out of the bottom position, a kick up with the legs is permissible. Bend the knees with the feet still against the wall, and straighten them quickly to add some thrust.",
			"level" => 10,
			"beginner" => "1 set of 1", "intermediate" => "2 sets of 2", "progression" => "1 set of 5",
		],
		];

		// Uncomment the below to run the seeder
		DB::table('exercises')->insert($exercises);
	}

}
