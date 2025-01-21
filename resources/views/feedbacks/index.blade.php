<x-layout>
    <x-slot:title>
        Feedbacks
    </x-slot:title>

    <div class="container mx-auto py-8">
        <h1 class="text-bordeaux text-2xl font-bold text-center mb-6">Feedback sturen</h1>

        <!-- Bericht weergeven als een sessie een 'success'-bericht bevat -->
        @if(session()->has('success'))
            <div class="bg-green-100 text-green-800 border border-green-200 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Feedback formulier -->
        <div class="bg-white p-6 shadow-md rounded max-w-4xl mx-auto">
            <form method="POST" action="{{ route('feedback.store') }}">
                @csrf

                <!-- PatientId -->
                <div class="mb-4">
                    <label for="PatientId" class="block text-gray-700 font-semibold mb-2">PatiëntId</label>
                    <input type="number" id="PatientId" name="PatientId" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-[#5F1A37] focus:outline-none" required>
                </div>

                <!-- Beoordeling -->
                <div class="mb-4">
                    <label for="Rating" class="block text-gray-700 font-semibold mb-2">Beoordeling (1-5 sterren)</label>
                    <select id="Rating" name="Rating" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-[#5F1A37] focus:outline-none" required>
                        <option value="" disabled selected>Kies een beoordeling</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }} Ster{{ $i > 1 ? 'ren' : '' }}</option>
                        @endfor
                    </select>
                </div>

                <!-- PraktijkEmail -->
                <div class="mb-4">
                    <label for="PracticeEmail" class="block text-gray-700 font-semibold mb-2">Praktijk Email</label>
                    <select id="PracticeEmail" name="PracticeEmail" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-[#5F1A37] focus:outline-none" required>
                        <option value="" disabled selected>Kies een praktijk email</option>
                        <option value="info@tandartsutrecht.nl">info@tandartsutrecht.nl</option>
                        <option value="info@dentalcareutrecht.nl">info@dentalcareutrecht.nl</option>
                        <option value="info@deutrechtsetandartspraktijk.nl">info@deutrechtsetandartspraktijk.nl</option>
                        <option value="info@tandartsutrechtcentrum.nl">info@tandartsutrechtcentrum.nl</option>
                        <option value="info@in-je-element.net">info@in-je-element.net</option>
                    </select>
                </div>


                <!-- PraktijkTelefoon -->
                <div class="mb-4">
                    <label for="PracticePhone" class="block text-gray-700 font-semibold mb-2">Praktijk Telefoon</label>
                    <select id="PracticePhone" name="PracticePhone" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-[#5F1A37] focus:outline-none" required>
                        <option value="" disabled selected>Kies een praktijk telefoon</option>
                        <option value="Telefoon: 030 760 1267">030 23 13 788 (tandartsutrecht)</option>
                        <option value="Telefoon: 030 303 97 50">030 303 97 50 (dentalcareutrecht)</option>
                        <option value="Telefoon: 030 760 1152">030 760 1152 (deutrechtsetandartspraktijk)</option>
                        <option value="Telefoon: 030 79 20 20 2">030 79 20 20 2 (tandartsutrechtcentrum)</option>
                        <option value="Telefoon: 030 23 13 788">030 23 13 788 (in-je-element)</option>
                    </select>
                </div>

                <!-- Feedback Bericht -->
                <div class="mb-4">
                    <label for="Message" class="block text-gray-700 font-semibold mb-2">Feedback</label>
                    <textarea id="Message" name="Message" rows="4" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-[#5F1A37] focus:outline-none" required></textarea>
                </div>

                <!-- Verzenden knop -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-[#5F1A37] text-black px-6 py-2 rounded font-semibold shadow-md transition hover:bg-[#771c46]">
                        Verstuur Feedback
                    </button>
                </div>
            </form>
        </div>

        <!-- Paginatie Links -->
        <div class="mt-6">
            {{ $feedbacks->links() }}
        </div>
    </div>
</x-layout>
