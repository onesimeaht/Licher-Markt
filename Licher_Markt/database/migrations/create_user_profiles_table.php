// database/migrations/create_user_profiles_table.php
public function up()
{
    Schema::create('user_profiles', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('name');
        $table->string('experience')->nullable();
        $table->json('skills')->nullable();
        $table->string('location')->default('Cotonou');
        $table->string('education')->nullable();
        $table->json('preferences')->nullable();
        $table->timestamps();
    });
}