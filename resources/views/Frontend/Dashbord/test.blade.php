@extends('layouts.frontend')

@section('title')
    Online Test | SkillGro
@endsection

@section('content')
    <div class="container my-5">
        <h3 class="mb-4">Weekly Test</h3>

        <!-- CAMERA PREVIEW -->
        <div class="mb-4">
            <label class="fw-bold">AI Camera Monitoring Enabled</label><br>
            <video id="cameraFeed" autoplay playsinline muted width="400" height="300"
                style="border:1px solid #000;"></video>
        </div>

        <!-- TEST FORM -->
        <form id="testForm" action="{{ route('submit_test') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label><strong>Q1. Example Question</strong></label><br>
                <input type="radio" name="q1" value="A"> A <br>
                <input type="radio" name="q1" value="B"> B <br>
                <input type="radio" name="q1" value="C"> C <br>
            </div>

            <button type="submit" class="btn btn-primary">Submit Test</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        async function startCamera() {
            const video = document.getElementById('cameraFeed');
            try {
                const stream = await navigator.mediaDevices.getUserMedia({
                    video: true
                });
                video.srcObject = stream;
                await video.play();
                console.log("Camera started in Laravel Blade");
            } catch (err) {
                console.error("Camera error:", err);
                alert("Camera permission denied or not found!");
            }
        }

        document.getElementById("testForm").addEventListener("submit", function(e) {
            e.preventDefault();
            alert("Test submitted!");
            this.submit();
        });

        startCamera();
    </script>
@endsection
