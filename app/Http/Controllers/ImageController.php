<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admins.admin.product.imag',compact('product'));
    }

    public function imageUpload(Request $request)
    {
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
        ]);
        DB::beginTransaction();
        $attribute = Images::create([]);
        //save translations
        $attribute->product_id = $request->producte_id;

        foreach ($request->image as $value) {
            $imageName = time().'_'.$value->getClientOriginalName();
            $value->move(public_path('images'),$imageName);
            $imageNams[] = $imageName;
        }
        $attribute->picture = $imageNams ;
        $attribute->save();
        DB::commit();
        return redirect()->back()->withSuccess('You have successfully upload image.')->with('image',$imageNams);
    }

public function update(Request $request, $id)
{
      $image = Images::findOrFail($id);
     // Handle image update logic here
    if ($request->hasFile('new_image')) {
        $newImage = $request->file('new_image');
        // Update image in the folder
        $imagePath = public_path('images/' . $image->filename);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
            $newImage->move(public_path('images'), $image->filename);
        }
        // Update image in the database
        $image->update([
            'filename' => $image->filename, // Update the filename as needed
            'caption' => $request->input('caption'),
            'description' => $request->input('description'),
        ]);
    } else {
        // Handle other updates (e.g., caption and description)
        $image->update([
            'caption' => $request->input('caption'),
            'description' => $request->input('description'),
        ]);
    }

    return redirect()->route('images.edit', $id)->with('success', 'Image updated successfully');
}

  public function destroy($id)
   {
    $image = Images::findOrFail($id);

    // Delete the image from the folder
    $imagePath = public_path('images/' . $image->filename);
    if (File::exists($imagePath)) {
        File::delete($imagePath);
    }

    // Delete the image from the database
    $image->delete();

    return redirect()->route('images.index')->with('success', 'Image deleted successfully');
  }
  }
